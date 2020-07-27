<?php
/**
 *
 */
 include("repuesta.php");
class Ventas
{
  var $obtener_Producto;
  var $conexion;
  var $nombre;
  var $cantidad;
  var $secuencia_temporal;
  var $total;

  function __construct(){}
  function constructortemporal($codproducto,$cantidad , $conexion){
    $this->codproducto = $codproducto;
    $this->cantidad = $cantidad;
    $this->conexion = $conexion;
  }

function constructoreliminardato($secuencia_temporal , $conexion){
  $this->secuencia_temporal = $secuencia_temporal;
  $this->conexion = $conexion;
}
function contructorfacturar($total, $conexion){
  $this->conexion = $conexion;
  $this->total = $total;
}

  function obtener_Productos($cod_producto, $conexion){

    if (trim($cod_producto) != "") {

      $consulta= " SELECT`descripcion_producto`
                    FROM `tbl_mp_registro_maestro_productos`
                    WHERE `secuencia_registro_producto` = ".$cod_producto ;

      $result = mysqli_query($conexion, $consulta);
      $row=mysqli_fetch_array($result);

      if ($row != null){
        echo $row['descripcion_producto'];
      }else {
        echo $respuesta = "2";
      }
    }else {
      echo $respuesta = "2";
    }

  }

   function insertarTablaTemp(){
     $totalventas = 0;
     $detalletabla = "";
     $objrespuesta = new Respuestas();
     if ( trim($this->codproducto) != "" && trim($this->cantidad) > 0  ) {

       $obtenerdatosproducto = "  SELECT `descripcion_producto`,`precio_mayorista`,`precio_minorista`
                            FROM `tbl_mp_registro_maestro_productos` WHERE `secuencia_registro_producto`= '".$this->codproducto."'";
      $result = mysqli_query($this->conexion, $obtenerdatosproducto);
      $row=mysqli_fetch_array($result);

      $descripcion = $row['descripcion_producto'];
      $precio = $row['precio_minorista'];
      $cantidad = $this->cantidad;
      $subtotal = round($precio * $cantidad);

       $insertatablatemp = " INSERT INTO `tbl_mv_detalle_transaccion_temporal`(`secuencia_registro_producto`, `descripcion_producto`, `precio_producto`, `cantidad`, `subtotal_producto`)
                          VALUES (".$this->codproducto.",'".$descripcion."',".$precio.",".$cantidad.",".$subtotal.")" ;

      $result = mysqli_query($this->conexion, $insertatablatemp);

      $obtenerdatostablatemp = " SELECT * FROM `tbl_mv_detalle_transaccion_temporal` ";

      $result = mysqli_query($this->conexion, $obtenerdatostablatemp);
      $list = array();
        while ($row = mysqli_fetch_array($result)) {

          $detalletabla .= '<tr>
                            <th>'.$row['secuencia_registro_producto'].'</th>
                            <td>'.$row['descripcion_producto'].'</td>
                            <td>'.$row['precio_producto'].'</td>
                            <td>'.$row['cantidad'].'</td>
                            <td>'.$row['subtotal_producto'].'</td>
                            <td> <button class="botoneslibres" onclick="eliminar_producto('.$row['secuencia_detalle_temporal'].')" type="button" name="button">Eliminar</button> </td>
                          </tr>';
          $totalventas += $row['subtotal_producto'];

        }

        $list['detalle']= $detalletabla;
        $list['total_venta']= $totalventas;

        echo json_encode($list);


     }else {
        return $objrespuesta->NoSucces("error");
     }


   }

   function eliminarTablaTemp(){
     $totalventas = 0;
     $detalletabla = "";
     $eliminarfila = "  DELETE FROM `tbl_mv_detalle_transaccion_temporal` WHERE `secuencia_detalle_temporal` = ".$this->secuencia_temporal ;
     mysqli_query($this->conexion, $eliminarfila);

     $obtenerdatostablatemp = " SELECT * FROM `tbl_mv_detalle_transaccion_temporal` ";

     $result = mysqli_query($this->conexion, $obtenerdatostablatemp);
     $list = array();
       while ($row = mysqli_fetch_array($result)) {

         $detalletabla .= '<tr>
                           <th>'.$row['secuencia_registro_producto'].'</th>
                           <td>'.$row['descripcion_producto'].'</td>
                           <td>'.$row['precio_producto'].'</td>
                           <td>'.$row['cantidad'].'</td>
                           <td>'.$row['subtotal_producto'].'</td>
                           <td> <button class="botoneslibres" onclick="eliminar_producto('.$row['secuencia_detalle_temporal'].')" type="button" name="button">Eliminar</button> </td>
                         </tr>';
         $totalventas += $row['subtotal_producto'];

       }

       $list['detalle']= $detalletabla;
       $list['total_venta']= $totalventas;

       echo json_encode($list);


   }

function Facturar($row){
$fecha = date("Y-m-d");
$uno = 1;
$transacion = 2;
$existencia_actual = 0;
$nueva_existencia = 0;


  $selectcantidadrowtemp = "  SELECT `secuencia_detalle_temporal` FROM `tbl_mv_detalle_transaccion_temporal`  ";

  $cantidadfilas = mysqli_query($this->conexion,$selectcantidadrowtemp);
  $rows = $cantidadfilas->num_rows;


      if ($rows == $row) {

        $insertarencabezado = "  INSERT INTO `tbl_mv_encabezado_transaccion`( `secuencia_registro_cliente`, `secuencia_usuario`, `fecha_realizacion_ventas`, `total_factura`)
                              VALUES (".$uno.",".$uno.",'".$fecha."',".$this->total." )  ";

        mysqli_query($this->conexion, $insertarencabezado);

        $obteneultimoencabezado = "  SELECT `secuencia_encabezado_ventas` FROM `tbl_mv_encabezado_transaccion` order by `secuencia_encabezado_ventas` Desc limit 1  ";
        $result2 = mysqli_query($this->conexion, $obteneultimoencabezado);
        $ultimoencabezado = mysqli_fetch_array($result2);


        $obtenerdatostemp = "  SELECT `secuencia_registro_producto`, `descripcion_producto`, `precio_producto`, `cantidad`, `subtotal_producto` FROM `tbl_mv_detalle_transaccion_temporal`  ";

        $result = mysqli_query($this->conexion, $obtenerdatostemp);

          while ($fila = mysqli_fetch_array($result)) {

            $insertartabla_miinventario = "  INSERT INTO `tbl_mi_inventario`( `secuencia_cat_tipo_transaccion`, `secuencia_registro_producto`, `fecha_registro_producto_inventario`)
                                        VALUES (".$transacion.",".$fila['secuencia_registro_producto'].",'".$fecha."')  ";

            $insertardetallefactura = "  INSERT INTO `tbl_mv_detalle_transaccion`( `secuencia_encabezado_ventas`, `secuencia_registro_producto`, `cantidad`, `subtotal_producto`)
                                        VALUES (".$ultimoencabezado['secuencia_encabezado_ventas'].",".$fila['secuencia_registro_producto'].",".$fila['cantidad'].",".$fila['subtotal_producto']."  )  ";

            mysqli_query($this->conexion, $insertartabla_miinventario);
           mysqli_query($this->conexion, $insertardetallefactura);

           $obtenerexistenciaactual = "  SELECT `existencia_actual` FROM `tbl_mp_registro_maestro_productos` WHERE `secuencia_registro_producto` = ".$fila['secuencia_registro_producto'] ;
           $existencias = mysqli_query($this->conexion, $obtenerexistenciaactual);
           $existencia = mysqli_fetch_array($existencias);
           $existencia_actual = $existencia['existencia_actual'];

           $nueva_existencia = $existencia_actual - $fila['cantidad'];

           $existencias = "  UPDATE `tbl_mp_registro_maestro_productos` SET `existencia_actual`=".$nueva_existencia."  WHERE `secuencia_registro_producto` =   ".$fila['secuencia_registro_producto'];
           mysqli_query($this->conexion, $existencias);



          }
          echo $respuesta ="1";
          $borrardatos = "  DELETE FROM `tbl_mv_detalle_transaccion_temporal`  ";
          mysqli_query($this->conexion, $borrardatos);



      }else {
        // code...
        echo $respuesta = "2";

      }

}

function eliminartabladetalletemp($conexion){

  $borrardatos = "  DELETE FROM `tbl_mv_detalle_transaccion_temporal`  ";
  mysqli_query($conexion, $borrardatos);

}


}


 ?>
