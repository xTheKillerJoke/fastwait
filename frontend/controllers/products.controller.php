<?php

class ProductsController
{
  /* Show Categories */
  static public function ctrShowCategories($item, $val)
  {
    $table = "categories";

    $response = ProductsModel::mdlShowCategories($table, $item, $val);

    return $response;
  }

  /* Show Sub-Categories */
  static public function ctrShowSubCategories($item, $val)
  {
    $table = "subcategories";

    $response = ProductsModel::mdlShowSubCategories($table, $item, $val);

    return $response;
  }

  /* Show Products */
  static public function ctrShowProducts($order, $item, $val, $base, $top)
  {
    $table = "aliproducts";

    $response = ProductsModel::mdlShowProducts($table, $order, $item, $val, $base, $top);

    return $response;
  }

  /* Show Product Detail */
  static public function ctrShowProductDetail($item, $val)
  {
    $table = "aliproducts";

    $response = ProductsModel::mdlShowProductDetail($table, $item, $val);

    return $response;
  }

  /* Products List */
  static public function ctrProductsList($order, $item, $val)
  {
    $table = "aliproducts";

    $response = ProductsModel::mdlProductsList($table, $order, $item, $val);

    return $response;
  }
}
