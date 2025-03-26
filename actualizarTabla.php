<?php
include('conexion.php');
$query = 'SELECT * FROM Producto';
$result = mysqli_query($conn, $query);
?>
<table class="table table-hover">
    <thead>
        <tr class="table-dark">
            <th>No Producto</th>
            <th>Nombre del producto</th>
            <th>Precio del producto</th>
            <th>Unidades del producto</th>
            <th>Descripción del producto</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
            <th>Mariana Herbert</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo '<tr class="table-active">';
                echo '<td class="text-center align-middle">' . $row["NoProducto"] . '</td>';
                echo '<td>' . $row["NombreProducto"] . '</td>';
                echo '<td>' . $row["PrecioProducto"] . '</td>';
                echo '<td>' . $row["UnidadesProducto"] . '</td>';
                echo '<td>' . $row["DescripcionProducto"] . '</td>';
                echo '<td class="text-center align-middle"><button class="btn btn-secondary btn-update" data-bs-toggle="modal" data-bs-target="#updateProductosModal" data-producto-id="' . $row["NoProducto"] . '"><i class="bi bi-repeat"></i></button></td>';
                echo '<td><i class="btn btn-secondary bi bi-trash3 btn-delete" data-producto-id="' . $row["NoProducto"] . '"></i></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
<?php mysqli_close($conn); ?>
