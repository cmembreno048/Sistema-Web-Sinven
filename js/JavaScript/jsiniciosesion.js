function ValidarInicoSesion(){

  var usuario = document.getElementById('usuario').value;
  var contrasenia = document.getElementById('contrasenia').value;
  if (usuario != "" && contrasenia != "") {

    $.post(
      "../../ajax/ajaxiniciosesion.php",
      {
        "usuario":usuario,
        "contrasenia":contrasenia,

      }  ,
      function(data){
          alert(data);
        validacionusuario(data);
      }

    );

  } else {
        alert("Verifique que los campos esten llenos");
  }


}


function validacionusuario(dato){

    if (dato == "1") {
      location.href="../../home.php";
    }else if (dato == "1") {
      alert("Los datos ingresados no coinciden o no existe el usuario");
    }else if (dato == "3") {
      alert("Los datos ingresados no coinciden o no existe el usuario");
    }




}
