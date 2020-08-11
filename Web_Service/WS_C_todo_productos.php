<?php

  include("../clases/Conexionbd.php");
  include("../clases/Productos.php");

  $obj_request_products = new Productos();
  echo Json_encode($obj_request_products->obtener_Productos($conexion), JSON_UNESCAPED_UNICODE);


 ?>