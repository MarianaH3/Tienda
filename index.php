<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" > 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!--iconos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>CRUD</title>
</head >

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Mi Primer CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <button type="button" class="btn btn-dark">Inicio</button>
                    <button type="button" class="btn btn-dark">Acerca de</button>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container fluid">
            <br></br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InsertProductosModal" data-bs-whatever="@getbootstrap">Insertar productos</button>
            <br></br>

            <div id="tablaProductos">
                <?php include('actualizarTabla.php'); ?> <!--0. se muestra la tabla -->
            </div>
        </div>  
    </section>

    <!-- VENTANA MODAL INSERTAR -->
    <div class="modal fade" id="InsertProductosModal" tabindex="-1" aria-labelledby="InsertProductosModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="InsertProductosModal">Nuevo Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="insertarProductoForm" id="insertarProductoForm" action="insertProducto.php" method="post">
                        <div class="mb-3">
                            <label for="NoProducto" class="col-form-label">Numero del producto:</label>
                            <input type="text" class="form-control" id="NoProducto" name="NoProducto">
                        </div>
                        <div class="mb-3">
                            <label for="NombreProducto" class="col-form-label">Nombre Producto:</label>
                            <input type="text" class="form-control" id="NombreProducto" name="NombreProducto">
                        </div>
                        <div class="mb-3">
                            <label for="PrecioProducto" class="col-form-label">Precio Producto:</label>
                            <input type="text" class="form-control" id="PrecioProducto" name="PrecioProducto">
                        </div>
                        <div class="mb-3">
                            <label for="UnidadesProducto" class="col-form-label">Unidades Producto:</label>
                            <input type="text" class="form-control" id="UnidadesProducto" name="UnidadesProducto">
                        </div>
                        <label for="DescripcionProducto" class="col-form-label">Descripcion Producto:</label>
                        <textarea class="form-control" id="DescripcionProducto" name="DescripcionProducto"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Insertar Productos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--  VENTANA MODAL ACTUALIZAR-->
<div class="modal fade" id="updateProductosModal" tabindex="-1" aria-labelledby="updateProductosModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateProductosModalLabel">Actualizar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="updateProductosForm" id="updateProductosForm" action="updateProducto.php" method="post">
          <div class="mb-3">
            <label for="update-numeroProducto" class="col-form-label">Numero del producto:</label>
            <input type="text" class="form-control" id="update-numeroProducto" name ="NoProducto" readonly>
          </div>
          <div class="mb-3">
            <label for="update-nombreProducto" class="col-form-label">Nombre Producto:</label>
            <input type="text" class="form-control" id="update-nombreProducto" name = "NombreProducto">
          </div>
          <div class="mb-3">
            <label for="update-precioProducto" class="col-form-label">Precio Producto:</label>
            <input type="text" class="form-control" id="update-precioProducto" name ="PrecioProducto">
          </div>
          <div class="mb-3">
            <label for="update-unidadesProducto" class="col-form-label">Unidades Producto:</label>
            <input type="text" class="form-control" id="update-unidadesProducto" name = "UnidadesProducto">
          </div>
        
          <label for="update-descripcionProducto" class="col-form-label">Descripcion Producto:</label>
          <textarea class="form-control" id="update-descripcionProducto" name="DescripcionProducto"></textarea>
          </div>

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar Productos</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- scripts -->
    <script src="Scripts/ajaxInsert.js"></script>
    <script src="Scripts/ajaxUpdate.js"></script>
    <script src="Scripts/ajaxDelete.js"></script>
    <script src="Scripts/CargarDatosModal/ajaxCargarDatosModalUpdate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!--Enlace que se encuentra en la página bootstrap -->
</body>
</html>   