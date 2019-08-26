<?php

require_once "connection.php";

class CategoriesModel
{
  /* Show Categories */
  static function mdlShowCategories($table, $item, $val)
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
      $stmt = Connection::connect()->prepare("SELECT * FROM $table ORDER BY id DESC");
      $stmt -> execute();

      return $stmt -> fetchAll();
    }
    $stmt -> close();
    $stmt = null;
  }
}