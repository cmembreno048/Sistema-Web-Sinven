function generarvuelto(e){

  if (e.keyCode === 13 && !e.shiftKey) {
        e.preventDefault();
        var efectivo = document.getElementById('efectivo').value;
        var total = document.getElementById('Total').value;

        if (total != "") {
          document.getElementById('vuelto').value = efectivo - total ;
        }

    }

}
