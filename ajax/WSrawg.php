
<?php
  include("../clases/RAWG.php");


if (isset($_POST)) {

  $objiniciosesion = new RAWG();
  echo $objiniciosesion->listGames();

}


 ?>