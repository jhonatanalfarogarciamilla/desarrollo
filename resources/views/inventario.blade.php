<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario - Ferretería TORNILLO SAC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: #1a73e8;
            color: white;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        header img {
            margin-right: 20px;
            height: 50px;
        }
        main {
            padding: 30px;
        }
        form {
            text-align: center;
            margin-bottom: 30px;
        }
        input[type="text"] {
            width: 40%;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background: #1a73e8;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #1558b0;
        }
        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #1a73e8;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        .no-resultados {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <img src="https://i.postimg.cc/BQjTkxZj/image.png" alt="Logo Ferretería">
        <div>
            <h1>Ferretería TORNILLO SAC</h1>
            <p>Encuentra, compara y elige tus productos fácilmente</p>
        </div>
    </header>

    <main>
        <form method="GET" action="/">
            <input type="text" name="buscar" value="{{ $busqueda }}" placeholder="Buscar producto...">
            <button type="submit">Buscar</button>
        </form>

        @if (count($resultados) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Marca</th>
                        <th>Precio (S/.)</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultados as $producto)
                        <tr>
                            <td>{{ $producto['nombre'] }}</td>
                            <td>{{ $producto['categoria'] }}</td>
                            <td>{{ $producto['marca'] }}</td>
                            <td>{{ number_format($producto['precio'], 2) }}</td>
                            <td>{{ $producto['stock'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="no-resultados">
                @if ($busqueda)
                    No se encontraron productos que coincidan con "{{ $busqueda }}".
                @else
                    Escribe algo para buscar en el inventario.
                @endif
            </div>
        @endif
    </main>
</body>
</html>
