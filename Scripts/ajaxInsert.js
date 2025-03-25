$(document).ready(function(){
    // Cuando se envíe el formulario
    $('form').submit(function(e){
        e.preventDefault(); // Evitar el envío normal del formulario

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(), // Serializa los datos del formulario

            success: function(response) {
                var result = JSON.parse(response);
                
                if (result.success) {
                    // Si se realizó la inserción correctamente
                    alert(result.message); 
                    $('form').trigger("reset"); // Restablecer el formulario

                    // Actualizar la tabla con el nuevo producto
                    $.get('actualizarTabla.php', function(data) {
                        $('#tablaProductos').html(data);
                    });

                    // Cerrar la ventana modal
                    $('#InsertProductosModal').modal('hide');
                } else {
                    // Si ocurrió un error durante la inserción
                    alert(result.message);
                }
            }
        });
    });
});
