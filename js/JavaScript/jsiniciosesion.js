function ValidarInicoSesion(){

  var usuario = document.getElementById('usuario').value;
  var contrasenia = document.getElementById('contrasenia').value;
  if (usuario != "" && contrasenia != "") {

    $.post(
      "../../Web_Service/WS_inicio_sesion.php",
      {

        "usuario":usuario,
        "contrasenia":contrasenia,

      }  ,
      function(data){
          var res = JSON.parse(data)
          
          if (res.status == "1") {
            
              location.href="../../home.php";

          }else{

            document.getElementById("Error_").innerHTML = "Verifique Los datos.";
  
          }
        
      }

    );

  } else {
    document.getElementById("Error_").innerHTML = "Verifique Los datos.";
 

  }


}


