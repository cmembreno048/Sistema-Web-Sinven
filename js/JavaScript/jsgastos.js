function gastos(){

var descripcion_gasto = document.getElementById('descripcion_gasto').value;
var cantidad_gasto = document.getElementById('cantidad_gasto').value;
var radio_gasto = $('input:radio[name=inlineRadioOptions]:checked').val();


  if (descripcion_gasto != "") {
      if (cantidad_gasto != "") {
          if (radio_gasto != null) {
            $.post("../../ajax/ajaxgasto.php",
              {
                "descripcion_gasto":descripcion_gasto,
                "cantidad_gasto":cantidad_gasto,
                "radio_gasto":radio_gasto,

              },function(data){
            
                validar(data);

              }


            );
          }else {
            alert("todos los datos son requeridos")
          }
      }
  }



}
function validar(data){
  if (data == "1") {
    alert("gasto ingresado correctamente");
  }else {
    alert("Error al cargar el gasto al sistema");
  }


}
