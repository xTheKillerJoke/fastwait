<?php

class LocationsController
{
  /* Show Locations */
  static public function ctrShowLocations($item, $val)
  {
    $table = "alilocations";

    $response = LocationsModel::mdlShowLocations($table, $ite, $val);

    return $response;
  }
}