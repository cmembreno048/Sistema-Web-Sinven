function cargar_producto(){
var cod_producto = document.getElementById('cod_producto').value;

  if (cod_producto != "") {
    $.post("../../ajax/ajax_obtener_producto.php",
      {
        "cod_producto":cod_producto,

      },function(data){
      validarexistenciacodproducto(data);
      }

    );

  }

}

function cargar_dato(){
  var codproducto = document.getElementById('cod_producto').value;
  var cantidad = document.getElementById('cantidad').value;

if (nombre_producto =! "" && cantidad > 0) {

  $.post("../../ajax/ajax_insertar_tabla_detalle_temp.php",
    {
      "codproducto":codproducto,
      "cantidad":cantidad,

    },function(data){

      var info = JSON.parse(data);
      $('#detalle_venta').html(info.detalle);
      document.getElementById('Total').value = info.total_venta;
        document.getElementById('cod_producto').value = "";
        document.getElementById('cantidad').value = "";
        document.getElementById('nombre_producto').value = "";


    }

  );
}



}

function eliminar_producto(secuencia_temporal){


  $.post("../../ajax/ajax_eliminar_fila_seleccionada_temp.php",
    {
      "secuencia_temporal":secuencia_temporal,

    },function(data){
      var info = JSON.parse(data);
      $('#detalle_venta').html(info.detalle);
      document.getElementById('Total').value = info.total_venta;


  });



}


function cargarfacturafinal(){
var row = 0;
var total = document.getElementById('Total').value;
row = $('#detalle_venta tr').length;

  if (row > 0 && total != "") {


    $.post("../../ajax/ajax_facturar.php",
      {
        "row":row,
        "total":total,

      },function(data){

        if (data=="1") {
          alert("Factura procesada correctamente");
          location.reload();
        }else {
          alert("error al cargar la factura");
        }

    });

  }else {
    alert("ingrese datos para poder facturar");
  }


}



function validarexistenciacodproducto(data){
var uno =1;
  if (data != "2") {
    document.getElementById('nombre_producto').value = data;
    document.getElementById('cantidad').value = uno;
  }else {
    alert("No se pudo encontrar el producto")
  }
}
