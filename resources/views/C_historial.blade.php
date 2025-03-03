<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Clínica de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto my-5 p-5 bg-white shadow-md rounded-lg">
        <div class="bg-blue-500 p-4 text-white text-xl font-bold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11.25v-4.5m0 0V6m0 1.5h1.5M12 7.5H9m0 0V6m0 1.5h1.5M12 14.25a2.25 2.25 0 11-4.5 0" />
            </svg>
            Historial De Clínica De Pacientes
        </div>
        <div class="grid grid-cols-2 gap-4 p-4">
            <div>
                <label class="block text-gray-700">Nombre del Médico</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Código de seguro social</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Área del médico</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Nombre completo</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Día y Fecha de la cita</label>
                <input type="date" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Edad</label>
                <input type="number" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Estado de la cita</label>
                <select class="w-full p-2 border rounded">
                    <option>Confirmada</option>
                    <option>Pendiente</option>
                    <option>Cancelada</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700">DNI</label>
                <input type="text" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Hora de la cita</label>
                <input type="time" class="w-full p-2 border rounded">
            </div>
            <div>
                <label class="block text-gray-700">Sexo</label>
                <select class="w-full p-2 border rounded">
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Otro</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700">Número de celular</label>
                <input type="tel" class="w-full p-2 border rounded">
            </div>
            <div class="col-span-2">
                <label class="block text-gray-700">Información de la cita y recomendaciones</label>
                <textarea class="w-full p-2 border rounded h-24"></textarea>
            </div>
        </div>
        <div class="flex justify-between items-center p-4">
            <button class="bg-gray-400 text-white px-4 py-2 rounded">Cancelar</button>
            <button class="bg-purple-500 text-white px-4 py-2 rounded">Guardar</button>
        </div>
    </div>
    <footer class="bg-blue-500 text-white text-center p-2 mt-5">
        Derechos reservados. Elaborado por Clase TI-206-CN USAP.
    </footer>
</body>
</html>