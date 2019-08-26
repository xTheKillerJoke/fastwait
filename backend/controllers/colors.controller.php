<?php

class ColorsController
{
  /* Show Colors */
  static public function ctrShowColors($item, $val)
  {
    $table = "alicolors";

    $response = ColorsModel::mdlShowColors($table, $ite, $val);

    return $response;
  }
}