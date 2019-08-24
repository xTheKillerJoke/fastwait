<?php

require_once "connection.php";

class AdministratorsModel
{
  /* Show Administrators */
  static public function mdlShowAdministrators($table, $item, $val)
  {
    $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $val, PDO::PARAM_STR);
    $stmt -> execute();

    return $stmt -> fetch();

    $stmt -> close();
    $stmt = null;
  }
}