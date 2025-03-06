<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-500 text-white">
    <!-- Navbar -->
    <nav class="bg-orange-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">Mi Tienda</a>
            <div>
                <a href="#" class="text-white px-4">Inicio</a>
                <a href="#" class="text-white px-4">Productos</a>
                <a href="#" class="text-white px-4">Agregar Producto</a>
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto py-10">
        <h2 class="text-3xl font-bold text-center mb-6">Detalles del Producto</h2>
        <div class="bg-white text-gray-900 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <img src="https://via.placeholder.com/300" alt="Imagen del producto" class="w-full h-64 object-cover mb-4 rounded-md">
            <h3 class="text-2xl font-bold text-orange-500 mb-2">Nombre del Producto</h3>
            <p class="text-lg mb-4">Descripción detallada del producto con características y beneficios.</p>
            <p class="text-xl font-semibold text-orange-500">Precio: $XX.XX</p>
            <p class="text-lg mt-2"><strong>Categoría:</strong> Electrónica</p>
            <p class="text-lg mt-2"><strong>Stock Disponible:</strong> 10 unidades</p>
            <div class="text-center mt-6">
                <a href="#" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600">Volver a la lista</a>
                <a href="#" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 ml-2">Editar Producto</a>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-orange-500 text-white text-center p-4 mt-10">
        <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
