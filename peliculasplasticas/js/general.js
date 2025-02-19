function sumar(valor) {
    var total = 0;
    var precio = document.getElementById('precio').value;
    var cantidad = document.getElementById('cantidad').value;



    total = precio * cantidad;

    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;

    /* Esta es la suma. */


    // Colocar el resultado de la suma en el control "span".
    document.getElementById('total').value = total;



}