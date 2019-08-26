<?php

require_once "connection.php";

class SubCategoriesModel
{
  /* Show Sub-Categories */
  static function mdlShowSubCategories($table, $item, $val)
  {
    if($item != null)
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
      $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    else
    {
      $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY id DESC");
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    $stmt -> close();
    $stmt = null;
  }
}