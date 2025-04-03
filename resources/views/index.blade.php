<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h2 class="text-2xl font-bold text-center mb-6">Lista de Productos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach ($listProducts as $product)
            <div class="bg-white p-4 shadow-md text-center">
                <h3 class="text-lg font-semibold">{{$product->name}}</h3>
                <p>{{$product->description}}</p>
            </div>
            @endforeach
           
            {{$listProducts->links() }}
            
        </div>
    </div>
</body>
</html>