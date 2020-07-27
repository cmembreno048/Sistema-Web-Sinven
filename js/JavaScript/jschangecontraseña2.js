function verificarusuario(){

  var respuesta1 = document.getElementById('respuesta1').value;
  var respuesta2 = document.getElementById('respuesta2').value;
  var respuesta3 = document.getElementById('respuesta3').value;

  if (respuesta1 != "" || respuesta2 != "" || respuesta3 != "" ) {
    $.post("../../ajax/ajaxchangeusuario2.php",
      {
        "respuesta1":respuesta1,
        "respuesta2":respuesta2,
        "respuesta3":respuesta3,

      },function(data){

        validacionusuario(data);
      }

    );

  }else {
    alert("Verifique los campos vacios.")
  }

  function validacionusuario(dato){
  
    if (dato == 3) {
      location.href="../../paginas/PRecuperacionContraseña2.php";
    }else if(dato != 3) {
      alert("Las respuestas no coinciden por favor reviselas de nuevo.");
    }
  }


}
