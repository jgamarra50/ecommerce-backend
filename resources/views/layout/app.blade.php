<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-500 text-white">

@yield('content')

    <div class="container mx-auto py-10">
        <h2 class="text-3xl font-bold text-center mb-6">Agregar Nuevo Producto</h2>
        <div class="bg-white text-gray-900 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="nombre" class="block text-lg font-semibold text-orange-500">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-lg font-semibold text-orange-500">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="precio" class="block text-lg font-semibold text-orange-500">Precio</label>
                    <input type="number" id="precio" name="precio" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required>
                </div>
                <div class="mb-4">
                    <label for="categoria" class="block text-lg font-semibold text-orange-500">Categoría</label>
                    <select id="categoria" name="categoria" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required>
                        <option value="electronica">Electrónica</option>
                        <option value="libros">Libros</option>
                        <option value="ropa">Ropa</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="stock" class="block text-lg font-semibold text-orange-500">Cantidad en Stock</label>
                    <input type="number" id="stock" name="stock" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required>
                </div>
                <div class="mb-4">
                    <label for="imagen" class="block text-lg font-semibold text-orange-500">Imagen del Producto</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-orange-500" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
