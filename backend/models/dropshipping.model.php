<?php

class DropShippingModel
{
  static public function mdlInsertVariants($variantsId, $productId, $colors, $sizes, $locations, $variantsPrice, $variantsOffer, $variantsQuantity, $variantsIcon, $variantsImg){

    for ($i=0; $i < count($variantsId); $i++) {
      $stmt = Conexion::conectar()->prepare("INSERT INTO alivariants(id, id_products, id_colors, id_size, id_location, variantPrice, variantOffer, variantQuantity, variantIcon, variantImg) VALUES (:id, :id_products, :id_colors, :id_size, :id_location, :variantPrice, :variantOffer, :variantQuantity, :variantIcon, :variantImg)");

      $stmt->bindParam(":id", $variantsId[$i], PDO::PARAM_STR);
      $stmt->bindParam(":id_products", $productId, PDO::PARAM_STR);
      $stmt->bindParam(":id_colors", $colors[$i], PDO::PARAM_STR);
      $stmt->bindParam(":id_size", $sizes[$i], PDO::PARAM_STR);
      $stmt->bindParam(":id_location", $locations[$i], PDO::PARAM_STR);
      $stmt->bindParam(":variantPrice", $variantsPrice[$i], PDO::PARAM_STR);
      $stmt->bindParam(":variantOffer", $variantsOffer[$i], PDO::PARAM_STR);
      $stmt->bindParam(":variantQuantity", $variantsQuantity[$i], PDO::PARAM_STR);
      $stmt->bindParam(":variantIcon", $variantsIcon[$i], PDO::PARAM_STR);
      $stmt->bindParam(":variantImg", $variantsImg[$i], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";
      
      }
    }

    $stmt->close();
    $stmt = null;
  }

  static public function mdlInsertProducts($productId, $title, $descriptions, $specifications, $cover, $coverPath, $productTopPrice, $productLowerPrice, $productTopOffer, $productLowerOffer, $quantity){
      $stmt = Conexion::conectar()->prepare("INSERT INTO aliproducts(id, title, descriptions, specifications, cover, coverPath, topPrice, lowerPrice, topOffer, lowerOffer, quantity) VALUES (:id, :title, :descriptions, :specifications, :cover, :coverPath, :topPrice, :lowerPrice, :topOffer, :lowerOffer, :quantity)");

      $stmt->bindParam(":id", $productId, PDO::PARAM_STR);
      $stmt->bindParam(":title", $title, PDO::PARAM_STR);
      $stmt->bindParam(":descriptions", $descriptions, PDO::PARAM_STR);
      $stmt->bindParam(":specifications", $specifications, PDO::PARAM_STR);
      $stmt->bindParam(":cover", $cover, PDO::PARAM_STR);
      $stmt->bindParam(":coverPath", $coverPath, PDO::PARAM_STR);
      $stmt->bindParam(":topPrice", $productTopPrice, PDO::PARAM_STR);
      $stmt->bindParam(":lowerPrice", $productLowerPrice, PDO::PARAM_STR);
      $stmt->bindParam(":topOffer", $productTopOffer, PDO::PARAM_STR);
      $stmt->bindParam(":lowerOffer", $productLowerOffer, PDO::PARAM_STR);
      $stmt->bindParam(":quantity", $quantity, PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";
      
      }

    $stmt->close();
    $stmt = null;
  }

  static public function mdlInsertColors($uniqueColors, $uniqueColorsValue, $uniqueColorsName){

    for ($i=0; $i < count($uniqueColors); $i++) {
      $stmt = Conexion::conectar()->prepare("INSERT INTO alicolor(id, colorName, colorValue) VALUES (:id, :colorName, :colorValue)");

      $stmt->bindParam(":id", $uniqueColors[$i], PDO::PARAM_STR);
      $stmt->bindParam(":colorName", $uniqueColorsValue[$i], PDO::PARAM_STR);
      $stmt->bindParam(":colorValue", $uniqueColorsName[$i], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";
      
      }
    }

    $stmt->close();
    $stmt = null;
  }

  static public function mdlInsertSizes($variantsId, $productId, $colors, $sizes, $locations, $variantsPrice, $variantsOffer, $variantsQuantity, $variantsIcon, $variantsImg){

    for ($i=0; $i < count($variantsId); $i++) {
      $stmt = Conexion::conectar()->prepare("INSERT INTO alilocation(id, id_products, id_colors, id_size, id_location, variantPrice, variantOffer, variantQuantity, variantIcon, variantImg) VALUES (:id, :id_products, :id_colors, :id_size, :id_location, :variantPrice, :variantOffer, :variantQuantity, :variantIcon, :variantImg)");

      $stmt->bindParam(":id", $variantsId[$i], PDO::PARAM_STR);
      $stmt->bindParam(":id_products", $productId, PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";
      
      }
    }

    $stmt->close();
    $stmt = null;
  }

  static public function mdlInsertLocations($variantsId, $productId, $colors, $sizes, $locations, $variantsPrice, $variantsOffer, $variantsQuantity, $variantsIcon, $variantsImg){

    for ($i=0; $i < count($variantsId); $i++) {
      $stmt = Conexion::conectar()->prepare("INSERT INTO alivariants(id, id_products, id_colors, id_size, id_location, variantPrice, variantOffer, variantQuantity, variantIcon, variantImg) VALUES (:id, :id_products, :id_colors, :id_size, :id_location, :variantPrice, :variantOffer, :variantQuantity, :variantIcon, :variantImg)");

      $stmt->bindParam(":id", $variantsId[$i], PDO::PARAM_STR);
      $stmt->bindParam(":id_products", $productId, PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";
      
      }
    }

    $stmt->close();
    $stmt = null;
  }

}