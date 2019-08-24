<?php

class AdministratorsController
{
  /* Administrator Login */
  public function ctrAdministratorLogin()
  {
    if(isset($_POST["loginEmail"]))
    {
      if(preg_match('/^[^0-9][a-zA-Z-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"]) &&
         preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPassword"]))
      {
        #$encrypt = crypt($_POST["loginPasswor"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $table = "administrators";
        $item = "email";
        $val = $_POST["loginEmail"];

        $response = AdministratorsModel::mdlShowAdministrators($table, $item, $val);

        if($response["email"] == $_POST["loginEmail"] && $response["password"] == $_POST["loginPassword"])
        {
          $_SESSION["validateBackendSession"] = "ok";
          $_SESSION["id"] = $response["id"];
          $_SESSION["name"] = $response["name"];
          $_SESSION["photo"] = $response["photo"];
          $_SESSION["email"] = $response["email"];
          $_SESSION["password"] = $response["password"];
          $_SESSION["profile"] = $response["profile"];

          echo '<script>
                  window.location = "home";
                </script>';
        }
        else
        {
          echo '<br>
                <div class="alert alert-danger">
                  LOGIN ERROR Please try again
                </div>';
        }
      }
    }
  }
}