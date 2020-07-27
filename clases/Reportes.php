<?php
/**
 *
 */
include("repuesta.php");
class Reportes
{
  var $fechainicial;
  var $fechafinal;
  var $conexion;

  function __construct(){}

  function constructorrangofechas($fechainicial, $fechafinal, $conexion){
    $this->fechainicial = $fechainicial;
    $this->fechafinal = $fechafinal;
    $this->conexion = $conexion;
  }


  function reportesRangoFecha(){

    $objrespuesta = new Respuestas();
    $first = "";
    $detalletabla= "";
    $last = "";
    $lista = array();
    $primerencabezadofactura = " SELECT `secuencia_encabezado_ventas` FROM `tbl_mv_encabezado_transaccion`
                                WHERE `fecha_realizacion_ventas` between '".$this->fechainicial."' and  '".$this->fechafinal."'
                                order by secuencia_encabezado_ventas asc "  ;
    $primero = mysqli_query($this->conexion, $primerencabezadofactura);

    if ( $obtenidoelprimero = mysqli_fetch_array($primero)) {
      $first = $obtenidoelprimero["secuencia_encabezado_ventas"];
    }

    $ultimoencabezadofactura = " SELECT `secuencia_encabezado_ventas` FROM `tbl_mv_encabezado_transaccion`
                                WHERE `fecha_realizacion_ventas` between '".$this->fechainicial."' and  '".$this->fechafinal."'
                                order by secuencia_encabezado_ventas desc "  ;

    $ultimo = mysqli_query($this->conexion, $ultimoencabezadofactura);

    if ( $obtenidoelultimo = mysqli_fetch_array($ultimo)) {
      $last = $obtenidoelultimo["secuencia_encabezado_ventas"];
    }

    if (trim($first) === "" ) {
       $objrespuesta->NoSucces("error con el primer rango de fechas");
        return $objrespuesta;
    }elseif (trim($last) === "") {
       $objrespuesta->NoSucces("error con el ultimo rango de fechas");
       return $objrespuesta;
    }elseif ($first != "" && $last != "") {

      $consultarfacturas = " SELECT `secuencia_encabezado_ventas`, `secuencia_registro_producto`, `cantidad`, `subtotal_producto`
                            FROM `tbl_mv_detalle_transaccion`
                            WHERE `secuencia_encabezado_ventas` BETWEEN ".$first." AND ".$last ;

      $total = mysqli_query($this->conexion, $consultarfacturas);


            while ($row = mysqli_fetch_array($total)) {

              $detalletabla .= '<tr>
                                <th>'.$row['secuencia_encabezado_ventas'].'</th>
                                <td>'.$row['secuencia_registro_producto'].'</td>
                                <td>'.$row['cantidad'].'</td>
                                <td>'.$row['subtotal_producto'].'</td>
                              </tr>';

            }

            $list['detalle']= $detalletabla;

            echo json_encode($list);



    }


  }


}





?>
