function generarreportefechas(){
  var fechainicial = document.getElementById('rango_desde').value;
  var fechafinal = document.getElementById('rango_hasta').value;

  if (fechainicial != "" && fechafinal != "") {

    $.post( "../../ajax/ajax_guardar_fechas_reportes.php",{

        "fechainicial":fechainicial,
        "fechafinal":fechafinal,


      },function(data){
        if (data=="1") {
          location.href="../../paginas/pagina_reporte_rangofecha.php";
        }else {
          alert("error al intentar generar el reporte");
        }
      }
    );
  }



}
