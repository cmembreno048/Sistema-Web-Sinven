function regisCliente(){

      var nombre = document.getElementById('Nombre').value;
      var apellido = document.getElementById('apellido').value;
      var telefono = document.getElementById('telefono').value;
      var identidad = document.getElementById('identidad').value;
      var radio = $('input:radio[name=exampleRadios]:checked').val();

          $.post( "../../ajax/ajax_registrar_cliente.php",{

              "nombre":nombre,
              "apellido":apellido,
              "telefono":telefono,
              "identidad":identidad,
              "radio":radio,

            },function(data){
            
              validar(data);

            }
          );

}
function validar(data){
  if (data=="1") {
    alert("Cliente ingresado correctamente");
  }else {
    alert("Error al ingresar el cliente");
  }

}
