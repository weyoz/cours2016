<?php
  include("modele/user/login.php");
if (isset($_GET["pseudo"]) && isset($_GET["password"])) {

  $controle = controle_login($_GET("pseudo"),$_GET("password"));
  //var_dump($controle);
  echo json_encode($controle);
}

 ?>
