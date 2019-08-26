<?php

class SizesController
{
  /* Show Sizes */
  static public function ctrShowSizes($item, $val)
  {
    $table = "alisizes";

    $response = SizesModel::mdlShowSizes($table, $ite, $val);

    return $response;
  }
}