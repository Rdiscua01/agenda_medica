<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Pacientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="w-full">
        <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
            <h2 class="text-xl font-bold">Reserva de pacientes</h2>
            <div>
                <button class="bg-white text-black px-4 py-2 rounded mr-2">Regresar al menú</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Cerrar Sesión</button>
            </div>
        </div>
        <div class="container mx-auto mt-6 p-4">
            <h4 class="text-center text-lg font-semibold">Cita del paciente</h4>
            <div class="flex justify-center mt-4">
                <input type="text" class="border p-2 w-1/2 rounded mr-2" placeholder="Buscar paciente...">
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Buscar</button>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="col-span-2">
                    <table class="w-full border border-gray-300">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="p-2 border">Nombre Completo</th>
                                <th class="p-2 border">Código Seguro Social</th>
                                <th class="p-2 border">Número de Celular</th>
                                <th class="p-2 border">Fecha de Nacimiento</th>
                                <th class="p-2 border">Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="p-2 border flex items-center"><img src="user-icon.png" width="30" class="mr-2"> Username</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full border border-gray-300 mt-4">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="p-2 border">Doctor encargado</th>
                                <th class="p-2 border">Área médica</th>
                                <th class="p-2 border">Número de doctor</th>
                                <th class="p-2 border">Estado de la cita</th>
                                <th class="p-2 border">Día y hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="p-2 border flex items-center"><img src="user-icon.png" width="30" class="mr-2"> Username</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                                <td class="p-2 border">Content</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-span-1 border p-4 bg-white">
                    <h6 class="text-center font-semibold">INFORMACIÓN DEL PACIENTE Y MOTIVOS POR LOS QUE ASISTE</h6>
                    <textarea class="w-full border p-2 mt-2 h-40"></textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>