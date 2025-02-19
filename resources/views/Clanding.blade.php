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
@extends('layouts.app')
@section('CLANDcontent')
<body class="bg-gray-50">
    <!-- HEADER -->
    

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
@endsection
</html>
