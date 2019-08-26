<?php

class CategoriesController
{
  /* Show Categories */
  static public function ctrShowCategories($item, $val)
  {
    $table = "categories";

    $response = CategoriesModel::mdlShowCategories($table, $item, $val);

    return $response;
  }
}