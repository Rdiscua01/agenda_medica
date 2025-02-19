<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <!-- IMPORTANTE PARA QUE CARGUE EL TAILWINDCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> 
    <!--                                            -->
    
</head>
<body>
    <header class="bg-blue-500 py-4">
        <div class="container mx-auto flex items-center justify-between px-6">
            <!-- LOGO Y NOMBRE CLÍNICA -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('imagenes/doclogo.png') }}" alt="Logo Clínica" class="w-12 h-12">
                <h1 class="text-white text-2xl font-bold">Clínica Salud</h1>
            </div>
    
            <!-- Botones -->
            <div class="flex space-x-3">
                <!-- BTN RESERVAR -->
                <a href="#" class="bg-white text-blue-600 hover:bg-gray-200 px-4 py-2 rounded-md text-lg shadow">Reservar</a>
                
                <!-- BTN HISTORIAL -->
                <a href="#" class="bg-white text-blue-600 hover:bg-gray-200 px-4 py-2 rounded-md text-lg shadow">Historial</a>
                
                <!-- BTN CERRAR SESIÓN -->
                <a href="#" class="bg-red-500 text-white hover:bg-red-400 px-4 py-2 rounded-md text-lg shadow">Cerrar Sesión</a>
            </div>
        </div>
    </header>
    

    @yield('CLANDcontent')
    @yield('DLANDcontent')
    @yield('DBALANDcontent')
</body>

</html>