<?php

class VariantsController
{
  /* Show Variants */
  static public function ctrShowVariants($item, $val)
  {
    $table = "alivariants";

    $response = VariantsModel::mdlShowVariants($table, $ite, $val);

    return $response;
  }
}