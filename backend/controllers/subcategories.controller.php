<?php

class SubCategoriesController
{
  /* Show Sub-Categories */
  static public function ctrShowSubCategories($item, $val)
  {
    $table = "subcategories";

    $response = SubCategoriesModel::mdlShowSubCategories($table, $ite, $val);

    return $response;
  }
}
