<?php

/**
 *
 */
class CierreCaja
{

  var $efectivo_caja;
  var $caja ;
  var $sob_fal ;
  var $conexion;

  function __construct($conexion)
  {
      $this->conexion = $conexion;
  }

  function constructor2($efectivo_caja){
  $this->efectivo_caja = $efectivo_caja;

  }
  function constructor3($caja, $efectivo_caja,$sob_fal){
  $this->efectivo_caja = $efectivo_caja;
  $this->caja = $caja;
  $this->sob_fal = $sob_fal;

  }

  function generarcaja(){
      $fecha = date("Y-m-d");
      $totalcaja = 0;
      $sobfal = 0;
      $totalfacturas = 0;
      $totalgastos = 0;
    $buscargastos = "select SUM(costo_gasto) as totalgastos from tbl_mv_gastos where fecha_gasto = '".$fecha."'"  ;

    $sumagastos = mysqli_query($this->conexion, $buscargastos);
    $row = mysqli_fetch_array($sumagastos);
    if ($row != null) {
      $totalgastos = $row["totalgastos"];
    }else {

    }

    $buscarfacturas = "select sum(Total_Factura) as totalfactura from TBL_MV_ENCABEZADO_TRANSACCION where Fecha_Realizacion_Ventas = '".$fecha."'" ;
    $sumafacturas = mysqli_query($this->conexion, $buscarfacturas);
    $row2 = mysqli_fetch_array($sumafacturas);
    if ($row2 != null) {
      $totalfacturas = $row2["totalfactura"];
      if (trim($totalfacturas) == "") {
        $totalfacturas = 0;
      }
    }else {

    }

    $totalcaja = $totalfacturas - $totalgastos;
    $sobfal = $totalcaja - $this->efectivo_caja;


    echo $totalgastos."*".$totalfacturas."*".$sobfal;
  }

function guardarcierrecaja(){
    $fecha = date("Y-m-d");
    $insertar =  " insert into tbl_mv_cierre_caja( cantidad_apuntado, cantidad_caja, sobrante_faltante, fecha_cierre_caja)
    values (".$this->efectivo_caja.",".$this->caja.",".$this->sob_fal.",'".$fecha."')"  ;

    $result = mysqli_query($this->conexion, $insertar);
    if ($result != null) {
      echo $respuesta ="1";
    }else {
      echo $respuesta = "2";
    }

  }

}


 ?>
