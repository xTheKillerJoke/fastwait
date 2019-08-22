<?php

  $item = "route";
  $val = $routes[0];

  $category = ProductsController::ctrShowCategories($item, $val);

  var_dump($category);
  
  if(!$category)
  {
    $subCategory = ProductsController::ctrShowSubCategories($item, $val);
  
    var_dump($subCategory);
  }

?>