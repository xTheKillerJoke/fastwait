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
    $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt -> close();
    $stmt = null;
  }

  /* Show Products */
  static public function mdlShowProducts($table, $order, $item, $val, $base, $top)
  {
    if($item != null)
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $order DESC LIMIT $base, $top");
      $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    else
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY $order DESC LIMIT $base, $top");
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    $stmt -> close();
    $stmt = null;
  }

  /* Show Product Detail */
  static public function mdlShowProductDetail($table, $item, $val)
  {
    $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
    $stmt -> execute();

    return $stmt -> fetch();

    $stmt -> close();
    $stmt = null;
  }

  /* Products List */
  static public function mdlProductsList($table, $order, $item, $val)
  {
    if($item != null)
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item ORDER BY $order DESC");
      $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    else
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY $order DESC");
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    $stmt -> close();
    $stmt = null;
  }
}