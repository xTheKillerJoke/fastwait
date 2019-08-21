<?php

require_once "connection.php";

class SlideModel
{
  static public function mdlShowSlide($table)
  {
    $stmt = Connection::connect()->prepare("SELECT * FROM $table");
    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt -> close();
    $stmt = null;
  }
}