<?php

require_once "connection.php";

class ProductsModel
{
  /* Show Categories */
  static public function mdlShowCategories($table, $item, $val)
  {
    if($item != null)
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
      $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
      $stmt -> execute();

      return $stmt -> fetch();
    }
    else
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table");
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    $stmt -> close();
    $stmt = null;
  }

  /* Show Sub-Categories */
  static public function mdlShowSubCategories($table, $item, $val)
  {
    $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $val, PDO::PARAM_INT);
    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt -> close();
    $stmt = null;
  }

  /* Show Products */
  static public function mdlShowProducts($table, $order)
  {
    $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY $order DESC LIMIT 16");
    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt -> close();
    $stmt = null;
  }
}