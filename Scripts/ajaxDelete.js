$(document).ready(function() {
    $(document).on('click', '.btn-delete', function() {
    
        var idProducto = $(this).data('producto-id');
        if (confirm('¿Estás seguro de que quieres borrar este producto?')) {
            // petición AJAX para eliminar el producto
            $.ajax({
                type: 'POST',
                url: 'deleteProducto.php',
                data: { NoProducto: idProducto },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $(this).closest('tr').remove();
                        alert(response.message);
                        
                    } else {
                        alert('Error al borrar el producto: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Error al borrar el producto. Consulta la consola para más detalles.');
                }
            });
        }
    });
});