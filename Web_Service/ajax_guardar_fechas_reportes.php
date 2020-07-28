<?php
session_start();

 if (isset($_POST)) {

  $fechainicial = $_POST["fechainicial"];
  $fechafinal = $_POST["fechafinal"];

  if (trim($fechainicial)!="" && trim($fechafinal!= "")   ) {

    $_SESSION['fechainicial'] = $fechainicial;
    $_SESSION['fechafinal'] = $fechafinal;
    echo "1";

  }else {
    // code...
    echo "2";

  }


}
   ?>
