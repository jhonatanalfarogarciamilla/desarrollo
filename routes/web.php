<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {

    // Inventario de productos (en memoria, sin base de datos)
    $inventario = [
        ['nombre' => 'Destornillador plano pequeño', 'categoria' => 'Destornillador', 'precio' => 4.50, 'marca' => 'Truper', 'stock' => 25],
        ['nombre' => 'Destornillador plano grande', 'categoria' => 'Destornillador', 'precio' => 5.00, 'marca' => 'Stanley', 'stock' => 18],
        ['nombre' => 'Destornillador de estrella', 'categoria' => 'Destornillador', 'precio' => 5.20, 'marca' => 'Bosch', 'stock' => 30],
        ['nombre' => 'Destornillador de punta Philips', 'categoria' => 'Destornillador', 'precio' => 6.00, 'marca' => 'Makita', 'stock' => 15],
        ['nombre' => 'Destornillador imantado', 'categoria' => 'Destornillador', 'precio' => 7.50, 'marca' => 'DeWalt', 'stock' => 20],
        ['nombre' => 'Lija para madera fina', 'categoria' => 'Lija', 'precio' => 1.00, 'marca' => '3M', 'stock' => 100],
        ['nombre' => 'Lija para metal gruesa', 'categoria' => 'Lija', 'precio' => 1.50, 'marca' => 'Norton', 'stock' => 90],
        ['nombre' => 'Lija para pared', 'categoria' => 'Lija', 'precio' => 1.20, 'marca' => 'Bosch', 'stock' => 80],
        ['nombre' => 'Lija de agua 400', 'categoria' => 'Lija', 'precio' => 2.00, 'marca' => 'Truper', 'stock' => 70],
        ['nombre' => 'Martillo carpintero', 'categoria' => 'Martillo', 'precio' => 15.00, 'marca' => 'Stanley', 'stock' => 25],
        ['nombre' => 'Martillo de goma', 'categoria' => 'Martillo', 'precio' => 13.50, 'marca' => 'Bosch', 'stock' => 10],
        ['nombre' => 'Martillo de bola', 'categoria' => 'Martillo', 'precio' => 14.00, 'marca' => 'Truper', 'stock' => 15],
        ['nombre' => 'Serrucho manual', 'categoria' => 'Sierra', 'precio' => 22.00, 'marca' => 'DeWalt', 'stock' => 10],
        ['nombre' => 'Sierra eléctrica', 'categoria' => 'Sierra', 'precio' => 250.00, 'marca' => 'Makita', 'stock' => 5],
        ['nombre' => 'Taladro percutor', 'categoria' => 'Taladro', 'precio' => 320.00, 'marca' => 'Bosch', 'stock' => 8],
        ['nombre' => 'Taladro inalámbrico', 'categoria' => 'Taladro', 'precio' => 380.00, 'marca' => 'DeWalt', 'stock' => 6],
        ['nombre' => 'Brocas para madera (set)', 'categoria' => 'Broca', 'precio' => 40.00, 'marca' => 'Bosch', 'stock' => 12],
        ['nombre' => 'Brocas para metal (set)', 'categoria' => 'Broca', 'precio' => 45.00, 'marca' => 'Truper', 'stock' => 10],
        ['nombre' => 'Brocas para concreto (set)', 'categoria' => 'Broca', 'precio' => 50.00, 'marca' => 'Makita', 'stock' => 7],
        ['nombre' => 'Llave ajustable', 'categoria' => 'Llave', 'precio' => 18.00, 'marca' => 'Stanley', 'stock' => 20],
        ['nombre' => 'Llave inglesa', 'categoria' => 'Llave', 'precio' => 16.50, 'marca' => 'Truper', 'stock' => 22],
        ['nombre' => 'Cemento Sol 42.5kg', 'categoria' => 'Construcción', 'precio' => 25.00, 'marca' => 'Sol', 'stock' => 50],
        ['nombre' => 'Arena gruesa (por m3)', 'categoria' => 'Construcción', 'precio' => 60.00, 'marca' => 'N/A', 'stock' => 10],
        ['nombre' => 'Ladrillo King Kong (unidad)', 'categoria' => 'Construcción', 'precio' => 1.20, 'marca' => 'Lark', 'stock' => 1000],
        ['nombre' => 'Fierro de construcción 1/2 pulgada', 'categoria' => 'Construcción', 'precio' => 38.00, 'marca' => 'Aceros Arequipa', 'stock' => 100],
        ['nombre' => 'Tubería PVC 1/2 pulgada', 'categoria' => 'Gasfitería', 'precio' => 8.00, 'marca' => 'Pavco', 'stock' => 200],
        ['nombre' => 'Pegamento para PVC', 'categoria' => 'Gasfitería', 'precio' => 12.00, 'marca' => 'Oatey', 'stock' => 50],
        ['nombre' => 'Cinta teflón', 'categoria' => 'Gasfitería', 'precio' => 2.00, 'marca' => 'N/A', 'stock' => 150],
        ['nombre' => 'Válvula de paso 1/2 pulgada', 'categoria' => 'Gasfitería', 'precio' => 15.00, 'marca' => 'Vainsa', 'stock' => 40],
        ['nombre' => 'Inodoro one-piece', 'categoria' => 'Baño', 'precio' => 450.00, 'marca' => 'Trébol', 'stock' => 10],
        ['nombre' => 'Lavatorio de pedestal', 'categoria' => 'Baño', 'precio' => 180.00, 'marca' => 'Trébol', 'stock' => 15],
        ['nombre' => 'Grifería para lavatorio', 'categoria' => 'Baño', 'precio' => 90.00, 'marca' => 'Vainsa', 'stock' => 25],
        ['nombre' => 'Ducha eléctrica', 'categoria' => 'Baño', 'precio' => 120.00, 'marca' => 'Sole', 'stock' => 20],
        ['nombre' => 'Foco LED 12W', 'categoria' => 'Electricidad', 'precio' => 8.00, 'marca' => 'Philips', 'stock' => 100],
        ['nombre' => 'Tomacorriente doble', 'categoria' => 'Electricidad', 'precio' => 10.00, 'marca' => 'BTicino', 'stock' => 80],
        ['nombre' => 'Interruptor simple', 'categoria' => 'Electricidad', 'precio' => 7.00, 'marca' => 'BTicino', 'stock' => 90],
        ['nombre' => 'Cable eléctrico #14 (por metro)', 'categoria' => 'Electricidad', 'precio' => 1.50, 'marca' => 'Indeco', 'stock' => 500],
        ['nombre' => 'Pintura látex blanca (galón)', 'categoria' => 'Pintura', 'precio' => 45.00, 'marca' => 'Vencedor', 'stock' => 30],
        ['nombre' => 'Rodillo para pintar', 'categoria' => 'Pintura', 'precio' => 12.00, 'marca' => 'N/A', 'stock' => 40],
        ['nombre' => 'Brocha de 3 pulgadas', 'categoria' => 'Pintura', 'precio' => 9.00, 'marca' => 'N/A', 'stock' => 60],
        ['nombre' => 'Thinner acrílico (litro)', 'categoria' => 'Pintura', 'precio' => 10.00, 'marca' => 'Tekno', 'stock' => 25],
        ['nombre' => 'Escalera de aluminio 6 pasos', 'categoria' => 'Herramientas', 'precio' => 150.00, 'marca' => 'Stanley', 'stock' => 10],
        ['nombre' => 'Carretilla 5p3', 'categoria' => 'Herramientas', 'precio' => 180.00, 'marca' => 'Truper', 'stock' => 8],
        ['nombre' => 'Lampa recta', 'categoria' => 'Herramientas', 'precio' => 35.00, 'marca' => 'Truper', 'stock' => 15],
        ['nombre' => 'Pico', 'categoria' => 'Herramientas', 'precio' => 40.00, 'marca' => 'Truper', 'stock' => 12],
        ['nombre' => 'Rastrillo para jardín', 'categoria' => 'Herramientas', 'precio' => 25.00, 'marca' => 'Gardena', 'stock' => 18],
        ['nombre' => 'Manguera de jardín 15m', 'categoria' => 'Jardinería', 'precio' => 50.00, 'marca' => 'N/A', 'stock' => 20],
        ['nombre' => 'Guantes de seguridad', 'categoria' => 'Seguridad', 'precio' => 15.00, 'marca' => '3M', 'stock' => 50],
        ['nombre' => 'Lentes de protección', 'categoria' => 'Seguridad', 'precio' => 10.00, 'marca' => '3M', 'stock' => 60],
        ['nombre' => 'Mascarilla para polvo', 'categoria' => 'Seguridad', 'precio' => 5.00, 'marca' => '3M', 'stock' => 100],
        ['nombre' => 'Botas de seguridad', 'categoria' => 'Seguridad', 'precio' => 120.00, 'marca' => 'Caterpillar', 'stock' => 20],
        ['nombre' => 'Clavos para madera 3 pulgadas (kg)', 'categoria' => 'Fijaciones', 'precio' => 8.00, 'marca' => 'N/A', 'stock' => 40],
        ['nombre' => 'Tornillos para madera (ciento)', 'categoria' => 'Fijaciones', 'precio' => 10.00, 'marca' => 'Spax', 'stock' => 80],
        ['nombre' => 'Tarugos para pared (ciento)', 'categoria' => 'Fijaciones', 'precio' => 6.00, 'marca' => 'Fischer', 'stock' => 100],
        ['nombre' => 'Candado de 40mm', 'categoria' => 'Seguridad', 'precio' => 25.00, 'marca' => 'Yale', 'stock' => 30],
        ['nombre' => 'Bisagra de 3 pulgadas', 'categoria' => 'Fijaciones', 'precio' => 4.00, 'marca' => 'Stanley', 'stock' => 70],
        ['nombre' => 'Chapa para puerta', 'categoria' => 'Seguridad', 'precio' => 60.00, 'marca' => 'Cantol', 'stock' => 25],
        ['nombre' => 'Escuadra metálica', 'categoria' => 'Herramientas', 'precio' => 12.00, 'marca' => 'Stanley', 'stock' => 35],
        ['nombre' => 'Nivel de mano', 'categoria' => 'Herramientas', 'precio' => 20.00, 'marca' => 'Stanley', 'stock' => 30],
        ['nombre' => 'Wincha de 5m', 'categoria' => 'Herramientas', 'precio' => 18.00, 'marca' => 'Stanley', 'stock' => 40],
        ['nombre' => 'Alicate universal', 'categoria' => 'Herramientas', 'precio' => 22.00, 'marca' => 'Stanley', 'stock' => 28],
    ];

    // Obtener búsqueda del usuario
    $busqueda = strtolower($request->get('buscar', ''));

    // Filtrar productos según búsqueda
    $resultados = array_filter($inventario, function ($producto) use ($busqueda) {
        return str_contains(strtolower($producto['nombre']), $busqueda) ||
               str_contains(strtolower($producto['categoria']), $busqueda);
    });

    return view('inventario', [
        'resultados' => $resultados,
        'busqueda' => $busqueda
    ]);
});
