function verificarusuario(){

    var usuario = document.getElementById('usuariorec').value;

    if(usuario!=""){

        $.post("../../Web_Service/WS_rec_correo.php",
      {
        "usuario":usuario,

      },function(data){
        var res = JSON.parse(data);
        if(res.status == "1" ){
            location.href = "../../index.php";
        }else{
            alert("Error al cambiar la contraseña por favor pruebe de nuevo.");
        }


      }

    );



    }else
    {
        var alerta = "Ingrese un usuario";
        document.getElementById("alerta").innerHTML = alerta;
    }


}