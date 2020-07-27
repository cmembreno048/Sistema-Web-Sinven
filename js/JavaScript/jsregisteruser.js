function cargar(){



var nombre = document.getElementById('nombre').value;
var apellido = document.getElementById('apellido').value;
var nacimiento = document.getElementById('fechanac').value;
var usuario = document.getElementById('usuario').value;
var pass1 = document.getElementById('pass1').value;
var pass2 = document.getElementById('pass2').value;
var radio = $('input:radio[name=inlineRadio1]:checked').val();
var respuesta1 = document.getElementById('respuesta1').value;
var respuesta2 = document.getElementById('respuesta2').value;
var respuesta3 = document.getElementById('respuesta3').value;

if(nombre == ""){
  alert("Ingrese nombre");
}


if(apellido == ""){
  alert("Ingrese apellido");
}

if(nacimiento == ""){
  alert("indique fecha de nacimiento");
}

if(usuario == ""){
  alert("ingrese un nombre de usuario");
}

if(radio == null){
  alert("indique el tipo de usuario");
}

if(respuesta1 == ""){
  alert("ingrese una respuesta valida");
}

if(respuesta2 == ""){
  alert("ingrese una respuesta valida");
}
if(respuesta3 == ""){
  alert("ingrese una respuesta valida");
}

if(pass1 == pass2 && pass1 != "" || pass2 != ""){
    $.post("../../ajax/ajaxnewuser.php",
      {
        "nombre":nombre,
        "apellido":apellido,
        "nacimiento":nacimiento,
        "usuario":usuario,
        "pass1":pass1,
        "pass2":pass2,
        "radio":radio,
        "respuesta1":respuesta1,
        "respuesta2":respuesta2,
        "respuesta3":respuesta3,

      },function(data){
          validar(data);
      }

    );

}else {
  alert("Las contraseña no coinciden verifique");
}


}

function validar(data){

    switch (data) {
        case "1":
          alert("Error al registrar el usuario");
          break;
        case "2":
          alert("Usuario registrado correctamente");
          break;
        case "3":
          alert("el usuario ya existe");
          break;
      default:alert("Error Desconocido Contacte al Adminitrador");

    }

}
