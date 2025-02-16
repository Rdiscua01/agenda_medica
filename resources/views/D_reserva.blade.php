<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Citas - Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para la imagen de fondo */
        body {
            background-image: url('/imagenes/D_reservaimagen.jpeg'); /* Cambia por tu imagen de fondo */
            background-size: cover; /* Cubre toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que se repita */
            background-attachment: fixed; /* Fija la imagen al desplazarse */
        }
    </style>
</head>
<body class="bg-gray-100 bg-opacity-90">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <!-- Contenedor del contenido -->
        <div class="bg-white shadow-2xl rounded-lg p-8 w-full max-w-4xl bg-opacity-95 backdrop-blur-sm">
            <!-- Título -->
            <h1 class="text-4xl font-bold text-center mb-8 text-blue-800">Gestión de Citas</h1>

            <!-- Recuadro para el contenido de citas -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner border border-gray-200">
                <!-- Espacio para el contenido dinámico -->
                <div id="contenido-citas" class="space-y-4">
                    <!-- Aquí el backend cargará las citas dinámicamente -->
                </div>
            </div>

            <!-- Botones de Acción (no funcionales por ahora) -->
            <div class="flex justify-end mt-8 space-x-4">
                <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                    Confirmar
                </button>
             
                <button class="px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

</body>
</html>