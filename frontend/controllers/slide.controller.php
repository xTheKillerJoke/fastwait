<?php

class SlideController
{
  public function ctrShowSlide()
  {
    $table = "slide";

    $response = SlideModel::mdlShowSlide($table);

    return $response;
  }
}