<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Historial del Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Imagen de fondo */
        body {
            background-image: url('/imagenes/Consulta_doctor.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    
</head>
<body class="bg-gray-100 bg-opacity-90">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <!-- Contenedor del menú y contenido -->
        <div class="bg-white shadow-2xl rounded-lg p-8 w-full max-w-4xl bg-opacity-95">
            <!-- Título del menú -->
            <h1 class="text-4xl font-bold text-center mb-8 text-blue-800">Historial del Doctor</h1>

            <!-- Menú de opciones -->
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-8">
                <button onclick="mostrarSeccion('ver-historial')" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 w-full sm:w-auto">
                    Ver Historial
                </button>
                <button onclick="mostrarSeccion('agregar-registro')" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300 w-full sm:w-auto">
                    Agregar Registro
                </button>
                <button onclick="mostrarSeccion('buscar-historial')" class="px-6 py-3 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition duration-300 w-full sm:w-auto">
                    Buscar Historial
                </button>
            </div>

            <!-- Contenido -->
            <div class="mt-8">
                <!-- Sección de Ver Historial -->
                <div id="ver-historial" class="seccion">
                    <h2 class="text-2xl font-semibold mb-6 text-blue-800">Ver Historial de Pacientes</h2>
                    <div class="space-y-4">
                        <!-- Ejemplo de consulta -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                            <p class="text-gray-700">Consulta: Revisión de rutina</p>
                            <div class="flex justify-end mt-4">
                                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition duration-300">Eliminar Consulta</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Agregar Registro -->
                <div id="agregar-registro" class="seccion hidden">
                    <h2 class="text-2xl font-semibold mb-6 text-green-800">Agregar Nuevo Registro</h2>
                    <form class="space-y-4">
                        <div>
                            <label for="nombre" class="block text-gray-700">Nombre del Paciente</label>
                            <input type="text" id="nombre" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        </div>
                        <div>
                            <label for="consulta" class="block text-gray-700">Consulta</label>
                            <textarea id="consulta" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                        </div>
                        <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300">Guardar Registro</button>
                    </form>
                </div>

                <!-- Sección de Buscar Historial -->
                <div id="buscar-historial" class="seccion hidden">
                    <h2 class="text-2xl font-semibold mb-6 text-yellow-800">Buscar Historial</h2>
                    <form class="space-y-4">
                        <div>
                            <label for="busqueda" class="block text-gray-700">Buscar por Nombre</label>
                            <input type="text" id="busqueda" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                        </div>
                        <button type="submit" class="px-6 py-3 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition duration-300">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para manejar la visibilidad de las secciones -->
    <script>
        function mostrarSeccion(seccionId) {
            // Oculta todas las secciones
            document.querySelectorAll('.seccion').forEach(seccion => {
                seccion.classList.add('hidden');
            });

            // Muestra la sección seleccionada
            document.getElementById(seccionId).classList.remove('hidden');
        }

        // Mostrar la sección "Ver Historial" por defecto
        mostrarSeccion('ver-historial');
    </script>

</body>
</html>