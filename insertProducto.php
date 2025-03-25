<?php
require("conexion.php");

//obtiene los datos del formulario para insertarlos
$noProducto = $_POST['NoProducto']; 
$nombreProducto = $_POST['NombreProducto'];
$precioProducto = $_POST['PrecioProducto']; 
$unidadesProducto = $_POST['UnidadesProducto']; 
$descripcionProducto = $_POST['DescripcionProducto']; 

$sql = "INSERT INTO Producto (NoProducto, NombreProducto, PrecioProducto, UnidadesProducto, DescripcionProducto) 
        VALUES ('$noProducto', '$nombreProducto', '$precioProducto', '$unidadesProducto', '$descripcionProducto')";

$response = array(); // Crear un array para la respuesta

if(mysqli_query($conn, $sql)) {
    $response['success'] = true;
    $response['message'] = "Nuevo producto añadido exitosamente";
} else {
    $response['success'] = false;
    $response['message'] = "Error al añadir el producto: " . mysqli_error($conn);
}

echo json_encode($response); // Devolver la respuesta como JSON

mysqli_close($conn);
?>
