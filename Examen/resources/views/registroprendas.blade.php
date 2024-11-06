<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Prendas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
</head>
<body>
    <h1>Registro de Prendas</h1>
    <form id="registroForm">
        @csrf
        <label for="nombre">Nombre de la Prenda:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="tipo">Tipo de Prenda:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <button type="submit">Registrar Prenda</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#registroForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{ route('registroprendas') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if(response.success) {
                        Swal.fire({
                            title: 'Prenda Registrada',
                            text: 'Nombre: ' + response.data.nombre + ', Tipo: ' + response.data.tipo + ', Color: ' + response.data.color + ', Cantidad: ' + response.data.cantidad,
                            icon: 'success',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                },
                
            });
        });
    </script>
</body>
</html>
