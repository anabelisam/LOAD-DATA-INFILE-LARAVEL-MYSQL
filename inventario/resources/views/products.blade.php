<html>
    <body>
        <h1>Nueva Vista de Productos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Costo</th>
                    <th>Unidades</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->referencia }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->costo }}</td>
                        <td>{{ $producto->unidades }}</td>
                        <td>{{ $producto->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>