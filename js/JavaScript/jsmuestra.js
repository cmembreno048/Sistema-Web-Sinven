
function ingresarmuestra(){
  var productos = document.getElementById('productos').value;
  var cantidad = document.getElementById('cantidad_rebajar').value

      if (productos != "" && cantidad != "" ) {

                  $.post("../../ajax/ajaxingresarmuestra.php",
                    {
                      "productos":productos,
                      "cantidad":cantidad,
                    },function(data){

                      validar(data);
                    }
                  );
      }else {
          alert("realize la busqueda de un producto valido")
      }

}

function validar(data){
  switch (data) {
    case "1":
      alert("Ingresado correctamente");
      break;
    case "2":
      alert("Error al cargar la muestra");
      break;

    default:

  }


}
