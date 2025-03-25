// Definir una función para cargar los datos del producto en la ventana modal
function cargarProducto(productoId) {
    //3.funcion obtiene los datos con una solicitud a obtenerProducto.php
    $.ajax({
        type: 'POST',
        url: 'obtenerProducto.php',
        data: { producto_id: productoId },
        success: function(response) {//se obtiene el json de la solicitud realizada a obtenerProducto.php
            var producto = JSON.parse(response);
            //los asigna a la modal
            $('#update-numeroProducto').val(producto.NoProducto);
            $('#update-nombreProducto').val(producto.NombreProducto);
            $('#update-precioProducto').val(producto.PrecioProducto);
            $('#update-unidadesProducto').val(producto.UnidadesProducto);
            $('#update-descripcionProducto').val(producto.DescripcionProducto);
        }
    });
}

$(document).ready(function() {
    
    $(document).on('click', '.btn-update', function() {// 2. se realiza lo siguiente si se clickea el btn-update de actualizarTabla.php
        var productoId = $(this).data('producto-id');//obtener el id de esa fila con el mismo btn
        cargarProducto(productoId); //funcion para cargar los datos de producto en ventana modal 
    });
});
