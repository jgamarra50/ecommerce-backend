@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success text-white">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Agregar Nuevo Producto</h2>
        <div class="card shadow-lg mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-warning">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label text-warning">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label text-warning">Precio</label>
                        <input type="number" id="precio" name="precio" step="0.01" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label text-warning">Categoría</label>
                        <select id="categoria" name="categoria" class="form-select" required>
                            <option value="electronica">Electrónica</option>
                            <option value="libros">Libros</option>
                            <option value="ropa">Ropa</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label text-warning">Cantidad en Stock</label>
                        <input type="number" id="stock" name="stock" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label text-warning">Imagen del Producto</label>
                        <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning text-white">Guardar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-warning text-center text-white py-4">
        <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
