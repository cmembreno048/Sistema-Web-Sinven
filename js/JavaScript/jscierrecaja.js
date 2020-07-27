function generarcaja(){

var efectivo_caja = document.getElementById('efectivo_caja').value

    if (efectivo_caja != "") {
            $.post("../ajax/ajaxgenerarcierrecaja.php",{


              "efectivo_caja":efectivo_caja,


            },function (data){

                var datos = data.split("*");
                document.getElementById("gastos").value=datos[0];
                document.getElementById("sumcaja").value=datos[1];
                document.getElementById("sob_fal").value = datos[2];
                if (datos[0] == 0) {
                    document.getElementById("gastos").value = 0;
                }
                if (datos[2] == 0) {
                    document.getElementById("sob_fal").value = 0;
                }
                if (datos[2]<0) {

                  document.getElementById("sob_fal").style.color = "red" ;
                } else {

                  document.getElementById("sob_fal").style.color = "green" ;

                }

            }

          );
    }else {
      alert("Ingrese el total en caja");
    }

}

function cierrecajajs(){
var gastos = document.getElementById("gastos").value;
var caja = document.getElementById("sumcaja").value;
var efectivo_caja = document.getElementById("efectivo_caja").value;
var sob_fal = document.getElementById("sob_fal").value;

if (gastos != "" && caja != "" && efectivo_caja != "" && sob_fal != "") {
            $.post("../ajax/ajaxgenerarcierrecaja2.php",{

              "gastos":gastos,
              "caja":caja,
              "efectivo_caja":efectivo_caja,
              "sob_fal":sob_fal,

            },function (data){

              validar(data);
            }

          );
}



}

function validar(data){
  switch (data) {
    case "1":
      alert("Cierre Ingresado Correctamente");
      break;
    case "2":
      alert("Error al cargar en cierre de caja")
      break;
    default:

  }

}
