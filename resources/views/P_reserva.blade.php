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
        <div class="container mx-auto mt-6 p-4 bg-white shadow-md rounded-lg">
            <h4 class="text-center text-lg font-semibold">Formulario de Reserva de Paciente</h4>
            <form class="mt-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Nombre Completo</label>
                        <input type="text" class="border p-2 w-full rounded" placeholder="Ingrese el nombre">
                    </div>
                    <div>
                        <label class="block text-gray-700">Código Seguro Social</label>
                        <input type="text" class="border p-2 w-full rounded" placeholder="Ingrese el código">
                    </div>
                    <div>
                        <label class="block text-gray-700">Número de Celular</label>
                        <input type="text" class="border p-2 w-full rounded" placeholder="Ingrese el número">
                    </div>
                    <div>
                        <label class="block text-gray-700">Fecha de Nacimiento</label>
                        <input type="date" class="border p-2 w-full rounded">
                    </div>
                    <div>
                        <label class="block text-gray-700">Doctor Encargado</label>
                        <input type="text" class="border p-2 w-full rounded" placeholder="Nombre del doctor">
                    </div>
                    <div>
                        <label class="block text-gray-700">Área Médica</label>
                        <input type="text" class="border p-2 w-full rounded" placeholder="Especialidad médica">
                    </div>
                    <div>
                        <label class="block text-gray-700">Estado de la Cita</label>
                        <select class="border p-2 w-full rounded">
                            <option>Programada</option>
                            <option>Confirmada</option>
                            <option>Cancelada</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700">Día y Hora</label>
                        <input type="datetime-local" class="border p-2 w-full rounded">
                    </div>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700">Motivo de la Consulta</label>
                    <textarea class="border p-2 w-full rounded" rows="4" placeholder="Describa el motivo"></textarea>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Reservar Cita</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
