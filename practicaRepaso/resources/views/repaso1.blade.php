<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Convertidor</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #333333;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #dddddd;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Convertidor</h1>
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

            <button type="submit">Convertir</button>
        </form>
    </div>
</body>
</html>
