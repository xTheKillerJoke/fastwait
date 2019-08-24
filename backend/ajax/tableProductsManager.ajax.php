<?php

class TableProductsManager
{
  /* Show Table Products Manager */
  public function showTable()
  {
    $img = "<img class='img-thumbnail' src='https://ae01.alicdn.com//kf//HTB1qHVOdRsmBKNjSZFFq6AT9VXaF//Vestido-de-verano-sin-mangas-para-mujer-con-encaje-y-cuello-en-V-Sexy-vestido-con.jpg_50x50.jpg'>";

    $options = "<div class='btn-group'>
                  <button type='button' class='btn btn-warning btn-flat'><i class='fa fa-pencil'></i></button>
                  <button type='button' class='btn btn-success btn-flat'><i class='fa fa-check'></i></button>
                  <button type='button' class='btn btn-danger btn-flat'><i class='fa fa-remove'></i></button>
                </div>";
    $dataJson = '{
                  "data":  [
                      "1",
                      "'.$img.'",
                      "Negro",
                      "L",
                      "Estados Unidos",
                      "Women",
                      "-",
                      "221",
                      "11.72",
                      "7.74",
                      "2",
                      "%",
                      "'.$options.'"
                    
                  ]
                }';
    
    echo $dataJson;
  }
}

/* Activate Table Products Manager */
$activate = new TableProductsManager();
$activate -> showTable();
