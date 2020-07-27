function registrarprod(){

  var nombre_corto = document.getElementById('nombre_corto').value;
  var descripcion = document.getElementById('descripcion').value;
  var precio_may = document.getElementById('precio_may').value;
  var precio_min = document.getElementById('precio_min').value;
  var categoria_prod = document.getElementById('categoria_prod').value;
  var unidad_medida = document.getElementById('unidad_medida').value;

    $.post("../../ajax/ajax_registrar_producto.php",
      {
        "nombre_corto":nombre_corto,
        "descripcion":descripcion,
        "precio_may":precio_may,
        "precio_min":precio_min,
        "categoria_prod":categoria_prod,
        "unidad_medida":unidad_medida,

      },function(data){
        validar(data);
      }

    );

}
function validar(data){
  if (data=="1") {
    alert("Producto ingresado correctamente");
  }else {
    alert("Error al intentar ingresar el producto");
  }

}
