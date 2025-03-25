<?php
require("conexion.php");

$noProducto = $_POST['NoProducto'];
$sql = "DELETE FROM Producto WHERE NoProducto = '$noProducto'";

$response = array();

if(mysqli_query($conn, $sql)) {
    $response['status'] = 'success';
    $response['message'] = 'Producto borrado exitosamente';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error al borrar el producto: ' . mysqli_error($conn);
}

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
