<?php
//4.se devolvera la respuesta json con los datos de un producto
require("conexion.php");

if(isset($_POST['producto_id'])) {
    $productoId = $_POST['producto_id'];

    $query = "SELECT * FROM Producto WHERE NoProducto = '$productoId'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $producto = mysqli_fetch_assoc($result);
        echo json_encode($producto);//retorna los datos del producto
    } else {
        echo json_encode(array('error' => 'No se encontró el producto')); 
    }
} else {
    echo json_encode(array('error' => 'ID de producto no proporcionado')); 
}

mysqli_close($conn);
?>
