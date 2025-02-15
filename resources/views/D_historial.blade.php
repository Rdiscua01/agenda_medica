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
            background-size: cover; /* Cubre toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que se repita */
            background-attachment: fixed; /* Fija la imagen al desplazarse */
        }
    </style>
</head>
<body class="bg-gray-100 bg-opacity-90"> <!-- Opaca el fondo -->

    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <!-- Contenedor del menú y contenido -->
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-4xl bg-opacity-90">
            <!-- Título del menú -->
            <h1 class="text-3xl font-bold text-center mb-8">Historial del Doctor</h1>

            <!-- Menú de opciones -->
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
                <button onclick="showSection('view')" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 w-full sm:w-auto">
                    Ver Historial
                </button>
                <button onclick="showSection('add')" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">
                    Agregar Registro
                </button>
                <button onclick="showSection('search')" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 w-full sm:w-auto">
                    Buscar Historial
                </button>
            </div>

            <!-- Contenido -->
            <div id="content" class="mt-6">
                <!-- Sección de Ver Historial -->
                <div id="view" class="section">
                    <h2 class="text-xl font-semibold mb-4">Ver Historial de Pacientes</h2>
                    <p>Aquí se mostrará el historial de pacientes.</p>
                </div>

                <!-- Sección de Agregar Registro -->
                <div id="add" class="section hidden">
                    <h2 class="text-xl font-semibold mb-4">Agregar Nuevo Registro</h2>
                    <p>Formulario para agregar un nuevo registro.</p>
                </div>

                <!-- Sección de Buscar Historial -->
                <div id="search" class="section hidden">
                    <h2 class="text-xl font-semibold mb-4">Buscar Historial</h2>
                    <p>Formulario para buscar en el historial.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para manejar la visibilidad de las secciones -->
    <script>
        function showSection(sectionId) {
            // Oculta todas las secciones
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });

            // Muestra la sección seleccionada
            document.getElementById(sectionId).classList.remove('hidden');
        }

        // Mostrar la sección "Ver Historial" 
        showSection('view');
    </script>

    <script>
        // Añadir consulta
        document.querySelector('.bg-green-500').addEventListener('click', () => {
            const consultaDiv = document.createElement('div');
            consultaDiv.classList.add('bg-gray-50', 'p-4', 'rounded-lg', 'shadow-sm', 'mb-4');
            consultaDiv.innerHTML = `
                <p class="text-gray-600">Consulta: Nueva Consulta</p>
                <div class="flex justify-end mt-4">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md">Añadir Consulta</button>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Eliminar Consulta</button>
                </div>
            `;
            document.getElementById('historial-consultas').appendChild(consultaDiv);
        });

        // Eliminar consulta
        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('bg-red-500')) {
                event.target.closest('div').remove();
            }
        });
    </script>

</body>
</html>