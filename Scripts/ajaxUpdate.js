$(document).ready(function(){
    $('form').submit(function(e){//5. se activa cuando presiona el boton actualizar productos
        e.preventDefault(); 

        $.ajax({
            type: 'POST',//obtiene los datos de la modal
            url: $(this).attr('action'),//solicitud se enviará a action del modal update de index.php que es igual a 'actualizarTabla.php'
            data: $(this).serialize(),//enviar en la solicitud los datos
            success: function(response) {
                var result = JSON.parse(response);
                
                if (result.success) {
                    alert(result.message);

                    $('form').trigger("reset");
                    $.get('actualizarTabla.php', function(data) {
                    $('#tablaProductos').html(data);

                    });
                } else {
                    alert(result.message); 
                }
            }
        });
    });
});