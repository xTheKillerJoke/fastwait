<?php

require 'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class DropShippingController
{
  static public function getProductLink($link)
  {
    $goutteClient = new Client();
    $guzzleClient = new GuzzleClient(array(
        'timeout' => 120,
    ));

    $goutteClient->setClient($guzzleClient);

    $crawler = $goutteClient->request('GET', 'https://es.aliexpress.com/item/32929439288.html?spm=a2g0o.productlist.0.0.42f31c66c2wzlW&algo_pvid=4c9810e4-2c10-4be9-a906-985f5d79c44d&algo_expid=4c9810e4-2c10-4be9-a906-985f5d79c44d-0&btsid=f7c5693d-4c0d-420e-b44f-0be20cc9c7c6&ws_ab_test=searchweb0_0,searchweb201602_10,searchweb201603_52');

    $script = $crawler->filter("script");

    $counter = 0;
    foreach ($script as $key => $value) 
    {
      $text = $value->textContent;

      preg_match('/"actionModule":+/', $text, $matchScript);

      if (isset($matchScript[0]))
      {
        $script = $crawler->filter("script")->eq($counter);

        break;
      }
      $counter++;
    }
    
    $stringScript = $script->text();

    preg_match('/\{\s+.+\}+/', $stringScript, $dataArray);
    
    $stringNoSpaces = $dataArray[0] . "}";

    $stringFinished = preg_replace('/data:/','"data":', $stringNoSpaces);

    $data = (array) json_decode($stringFinished, true);

    $actionModule = $data["data"]["actionModule"];
    $imageModule = $data["data"]["imageModule"];
    $pageModule = $data["data"]["pageModule"];
    $quantityModule = $data["data"]["quantityModule"];
    $skuModule = $data["data"]["skuModule"];
    $specsModule = $data["data"]["specsModule"]["props"];


    $productId = $actionModule["productId"];
    $title = $pageModule["title"];
    $descriptions = $pageModule["description"];
    $cover = $pageModule["imagePath"];
    $covers = $imageModule["imagePathList"];
    $quantity = $quantityModule["totalAvailQuantity"];
    $specifications = "Specifications \n\n";

    for ($i=0; $i < count($specsModule); $i++)
    { 
      $nombreEspAux = htmlspecialchars($specsModule[$i]["attrName"], ENT_QUOTES);
      $valorEspAux = htmlspecialchars($specsModule[$i]["attrValue"], ENT_QUOTES);

      $specifications .= " $nombreEspAux: $valorEspAux \n\n";					
    }

    $variants = $skuModule["skuPriceList"];
    $properties = isset($skuModule["productSKUPropertyList"]) ? $skuModule["productSKUPropertyList"] : [];
    
    /******************************************************************************************************************************************/

    $allVariantsId = "";
    $allPrices = "";
    $allOffers = "";
    $allQuantities = "";
    
    $allIcons = "";
    $allImgs = "";
    $allColors = "";
    $allColorsValue = "";
    $allColorsName = "";

    $allSizes = "";
    $allSizesName = "";

    $allLocations = "";
    $allLocationsName = "";

    $na = "void";



    for($i = 0; $i < count($variants); $i++)
    {
      $variant = $variants[$i];

      $idsVariante = explode(",",$variant["skuPropIds"]);

      $value = $variant["skuVal"];

      $price = (float) str_replace(',','.',$value["skuCalPrice"]);

      $offer = (float) (isset($value["actSkuCalPrice"])) ? $value["actSkuCalPrice"] : 0.00;

      $unit = $value["availQuantity"];

      if ($unit != 0)
      {
        for ($j=0; $j < count($idsVariante); $j++)
        { 
          for ($k=0; $k < count($properties); $k++)
          { 
            $itemsProp = $properties[$k]["skuPropertyValues"];
            
            for ($l=0; $l < count($itemsProp); $l++)
            { 
              $searchResult = array_search($idsVariante[$j],$itemsProp[$l]);
              
              if ($searchResult)
              {
                $indexK = $k;
                $indexL = $l;
              }
            }
          }
        
          if(isset($properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"]))
          {
            if(!isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImagePath"]))
            {
              if(!isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuColorValue "]))
              {
                if (!isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertySendGoodsCountryCode"]))
                {
                  if ($allSizes == "" && $allSizesName == "")
                  {
                    $allSizes = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                    $allSizesName = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
                  }
                  else
                  {
                    $allSizes .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                    $allSizesName .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
                  }
                } 
                elseif (isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertySendGoodsCountryCode"]))
                {
                  if ($allLocations == "" && $allLocationsName == "")
                  {
                    //$allLocations == "" ? $allLocations = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"] : //cond2 ? : $allLocations .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                    $allLocations = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                    $allLocationsName = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
                  }
                  else
                  {
                    $allLocations .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                    $allLocationsName .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
                  }
                }
              }
            }
            elseif (isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImagePath"]) || isset($properties[$indexK]["skuPropertyValues"][$indexL]["skuColorValue"]))
            {
              if ($allIcons == "" && $allImgs == "" && $allColors == "" && $allColorsName == "")
              {
                if ($allColorsValue == "" &&  $allColors != "")
                {
                  $allColorsValue = $na;
                }
                else
                {
                  $allColorsValue = $properties[$indexK]["skuPropertyValues"][$indexL]["skuColorValue"];
                }
                $allIcons = $properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImageSummPath"];
                $allImgs = $properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImagePath"];
                $allColors = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                $allColorsName = $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
              }
              else
              {
                $allIcons .= "," . $properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImageSummPath"];
                $allImgs .= "," . $properties[$indexK]["skuPropertyValues"][$indexL]["skuPropertyImagePath"];
                $allColors .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueId"];
                $allColorsValue .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["skuColorValue"];
                $allColorsName .= "-" . $properties[$indexK]["skuPropertyValues"][$indexL]["propertyValueName"];
              }
            }
          }
        }
      }

      $variantsIcon = explode(",",$allIcons);
      $variantsImg = explode(",",$allImgs);
      $colors = explode("-",$allColors);
      $colorsValue = explode("-",$allColorsValue);
      $colorsName = explode("-",$allColorsName);
      $sizes = explode("-",$allSizes);
      $sizesName = explode("-",$allSizesName);
      $locations = explode("-",$allLocations);
      $locationsName = explode("-",$allLocationsName);


      $allVariantsId == "" ? $allVariantsId = $variants[$i]["skuPropIds"]:
      $allVariantsId .= "-" . $variants[$i]["skuPropIds"];

      $allOffers == "" ? $allOffers = $offer:
      $allOffers .= "-" . $offer;

      $allQuantities == "" ? $allQuantities = $unit:
      $allQuantities .= "-" . $unit;

      $allPrices == "" ? $allPrices = $price:
      $allPrices .= "-" . $price;

      $variantsId = explode("-",$allVariantsId);
      $variantsQuantity = explode("-",$allQuantities);
      $variantsOffer = explode("-",$allOffers);
      $variantsPrice = explode("-",$allPrices);
    }
    $coverPath = json_encode($covers);
    
    $uniqueColors = array_unique($colors);
    $uniqueColorsValue = array_unique($colorsValue);
    $uniqueColorsName = array_unique($colorsName);
    $uniqueSizes = array_unique($sizes);
    $uniqueSizesName = array_unique($sizesName);
    $uniqueLocations = array_unique($locations);
    $uniqueLocationsName = array_unique($locationsName);

    $valueTotalVariants = count($variantsId);

    $productTopOffer = max($variantsOffer);
    $productLowerOffer = min($variantsOffer);
    $productTopPrice = max($variantsPrice);
    $productLowerPrice = min($variantsPrice);
  }
}