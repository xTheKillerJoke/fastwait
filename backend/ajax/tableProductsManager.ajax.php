<?php

require_once "../controllers/categories.controller.php";
require_once "../controllers/variants.controller.php";

require_once "../models/categories.model.php";
require_once "../models/variants.model.php";

class TableVariantsManager
{
  public $productLink;

  public function valideLink()
  {
    $data = $this->productLink;

    //$response = DropShippingController::getProductLink();

    echo json_encode($data);
  }
  /* Show Table Variants Manager */
  public function showTable()
  {
    $item = null;
    $val = null;

    $variants = VariantsController::ctrShowVariants($item, $val);

    $dataJson = '
    {
      "data": [ ';

    for ($i=0; $i < count($variants)-1; $i++) {
      /* Get Image */
      $variantsImg = "<img src='".$variants[$i]["variantsImg"]."' class='img-thumbnail' width='100px'></img>";
      /* Get Colors */
      $item = "id";
      $val = $variants[$i]["id_color"];

      $colors = ColorsController::ctrShowColors($item, $val);

      if ($colors["colorName"] == "")
      {
        $color = "N/A";
      }
      else
      {
        $color = $colors["colorName"];
      }

      /* Get Locations */
      $item2 = "id";
      $val2 = $variants[$i]["id_location"];

      $locations = LocationsController::ctrShowLocations($item2, $val2);

      if ($locations["locationName"] == "")
      {
        $location = "N/A";
      }
      else
      {
        $location = $locations["locationName"];
      }

      /* Get Sizes */
      $item3 = "id";
      $val3 = $variants[$i]["id_size"];

      $sizes = SizesController::ctrShowSizes($item3, $val3);

      if ($sizes["sizeName"] == "")
      {
        $size = "N/A";
      }
      else
      {
        $size = $sizes["sizeName"];
      }
      

      /* Add Offer Status */
      if($variants[$i]["offerStatus"] == 0)
      {
        $statusColor = "bg-navy";
        $statusText = "Disable";
        $statusOffer = 1;
      }
      else
      {
        $statusColor = "bg-olive";
        $statusText = "Active";
        $statusOffer = 0;
      }

      $status = "<button class='btn btn-xs btn-flat btnStatus ".$statusColor."' idvariants='".$variants[$i]["id"]."' statusOffer='".$statusOffer."'>".$statusText."</button>";

      $dataJson .=  '[
                      "1",
                      "'.$img.'",
                      "Negro",
                      "L",
                      "Estados Unidos",
                      "221",
                      "11.72",
                      "7.74",
                      "2",
                      "%",
                      "status",
                      "'.$options.'"
                    ],';
    }
    $dataJson = substr($dataJson, 0, -1);
    $dataJson .=']
    }';
    
    echo $dataJson;
  }
}

/* Activate Table Products Manager */
/* $activate = new TableProductsManager();
$activate -> showTable(); */

$productLink = new TableVariantsManager();
$productLink -> productLink = $_POST["productLink"];
$productLink -> valideLink();