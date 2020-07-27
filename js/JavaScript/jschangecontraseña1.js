function verificarusuario(){

  var usuario = document.getElementById('usuario').value;

  if (usuario!="") {
    $.post("../../ajax/ajaxchangeusuario.php",
      {
        "usuario":usuario,

      },function(data){
        validacionusuario(data);
      }


    );

  }else {
    alert("Ingrese un usuario para continuar.")
  }

  function validacionusuario(dato){

    if (dato == "1") {
      location.href="../../paginas/PRecuperacionContraseña.php";
    }else if (dato == "2") {
      alert("El Usuario Ingresado no Existe");
    }
  }


}
