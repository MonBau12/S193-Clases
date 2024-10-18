<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/js/app.js'])

    <title>Convertidor</title>
</head>
<body>
    <form action="/convertir" method="GET">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required>

        <label for="unidad">Unidad de conversión:</label>
        <select id="unidad" name="unidad">
            <option value="MBtoGB">MB a GB</option>
            <option value="GBtoMB">GB a MB</option>
            <option value="GBtoTB">GB a TB</option>
            <option value="TBtoGB">TB a GB</option>
        </select>

        <button type="submit" class="btn btn-primary">Convertir</button>
    </form>
</body>
</html>
