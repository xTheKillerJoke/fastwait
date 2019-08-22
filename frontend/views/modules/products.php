<?php

  $item = "route";
  $val = $routes[0];

  $category = ProductsController::ctrShowCategories($item, $val);

  var_dump($category["id"]);
  
  if(!$category)
  {
    $subCategory = ProductsController::ctrShowSubCategories($item, $val);
  
    $item2 = "id_subcategory";
    $val2 = $subCategory[0]["id"];
  }
  else
  {
    $item2 = "id_category";
    $val2 = $category["id"];
  }

  $order = "id";
  $base = 0;
  $top = 20;

  $products = ProductsController::ctrShowProducts($order, $item2, $val2);

  var_dump(count($products));

  if(!$products)
  {
    echo "You have no Products to show";
  }

?>