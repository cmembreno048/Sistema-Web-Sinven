<?php
  include("../clases/Conexionbd.php");
  include("../clases/Ventas.php");

if (isset($_POST)) {

  $objiniciosesion = new Ventas();
  echo $objiniciosesion->eliminartabladetalletemp();

}


 ?>
