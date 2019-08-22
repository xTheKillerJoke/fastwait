<?php

  $item = "route";
  $val = $routes[0];

  $category = ProductsController::ctrShowCategories($item, $val);

  var_dump($category["id"]);
  
  if(!$category)
  {
    $subCategory = ProductsController::ctrShowSubCategories($item, $val);
  
    var_dump($subCategory["id"]);
  }
/*   else
  {
    $item2 = "id_category";
    $val2 = $category["id"];
  }

  $order = "id";

  $products = ProductsController::ctrShowProducts($order, $item2, $val2); */

?>