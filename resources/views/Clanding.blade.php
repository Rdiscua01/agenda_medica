<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal Cliente</title>
    <!-- IMPORTANTE PARA QUE CARGUE EL TAILWINDCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> 
    <!--                                            -->
</head>
<body class="bg-gray-50">
    <!-- HEADER -->
    <header class="bg-blue-600 py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <!-- NOMBRE CLINICA -->
            <h1 class="text-white text-2xl font-bold">Clínica Salud Plus</h1>

            <!-- Botones -->
            <div class="space-x-4">
                <!-- BTN RESERVAR -->
                <a href="#" class="text-white bg-blue-500 hover:bg-blue-400 px-4 py-2 rounded-md text-lg">Reservar</a>
                
                <!-- BTN HISTORIAL -->
                <a href="#" class="text-white bg-blue-500 hover:bg-blue-400 px-4 py-2 rounded-md text-lg">Historial</a>
                
                <!-- BTN CERRAR SESION -->
                <a href="#" class="text-white bg-red-500 hover:bg-red-400 px-4 py-2 rounded-md text-lg">Cerrar Sesión</a>
            </div>
        </div>
    </header>

    <!-- CONTENIDO -->
    <main class="py-16 px-4 text-center">
        <h2 class="text-3xl font-semibold text-gray-800">Bienvenido a la Clínica Salud Plus</h2>
        <p class="mt-4 text-lg text-gray-600">Tu salud es nuestra prioridad. Reserva una cita, consulta tu historial médico y más.</p>
        
        <!-- IMG CLINICA -->
        <div class="mt-8">
            <img src="{{ asset('imagenes/clinica.jpg') }}" alt="Clínica" class="mx-auto rounded-lg shadow-lg">
        </div>
    </main>
</body>
</html>
