function Actualizarcontraseña() {

  var con1 = document.getElementById('con1').value;
  var con2 = document.getElementById('con2').value;

  if (con1 != "" && con2 != "") {

    if (con1 == con2) {

      $.post("../../ajax/ajaxchangeusuario3.php",
        {
          "con1":con1,
          "con2":con2,

        },function(data){

          verificarcontraseñas(data);
        }


      );

    }else {
      alert("Las contraseñas no coinciden, verifique.")
    }

  }else {
    alert(" Verifique que los campos esten llenos")
  }

}


function verificarcontraseñas(dato){

  if (dato == "1") {
     alert(" Cambio de Contraseña Exitoso ")
     location.href="../../index.php";
  }else {
    alert("NO se puedo completar el cambio de contraseña, Intente nuevamente")
  }


}
