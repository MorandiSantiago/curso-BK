<?php
$grupos = [
    'Primeros pasos' => [
        'tareaClase3.php' => 'Variables, operaciones y geometría',
        'tareaClase4.php' => 'Condicionales y división entera',
        'tareaClase5.php' => 'Bucles, pares, impares y sumas'
    ],
    'Formularios y factorial' => [
        'tareaClase6/ejercicio1.php' => 'Factorial de 8',
        'tareaClase6/ejercicio2.php' => 'Formulario de calificaciones',
        'tareaClase6/ejercicio3.php' => 'Calificaciones con validaciones'
    ],
    'Arrays' => [
        'tareaClase7/ejercicio1.php' => 'Diez números pares',
        'tareaClase7/ejercicio1B.php' => 'Array mixto',
        'tareaClase7/ejercicio1C.php' => 'Array asociativo ficticio',
        'tareaClase7/ejercicio1D.php' => 'Ciudades e índices',
        'tareaClase7/ejercicio1E.php' => 'Ciudades con claves'
    ],
    'Funciones' => [
        'tareaClase8/ejercicio1A.php' => 'Perímetro y superficie',
        'tareaClase8/ejercicio1B.php' => 'Mayúsculas y minúsculas ASCII',
        'tareaClase8/ejercicio1C.php' => 'Días por mes',
        'tareaClase8/ejercicio1D.php' => 'Palíndromos simples'
    ],
    'Prácticas de interfaz' => [
        'Login/index.html' => 'Formulario visual con simulación local',
        'tareaClase7/editar%20agregar/index.html' => 'Productos en memoria',
        'tareaClase8/tabla/index.html' => 'Cálculo de cantidades y totales',
        'tareaClase9/cards/index.html' => 'Tarjetas con efecto 3D y selección'
    ]
];
?>
<!doctype html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Ejercicios de PHP y frontend</title><link rel="stylesheet" href="curso.css"></head>
<body><main>
<h1>Ejercicios de PHP y frontend</h1>
<p>Prácticas de formación iniciadas en 2023 y revisadas en 2026. Usan datos ficticios y no se conectan con sistemas reales.</p>
<?php foreach ($grupos as $titulo => $ejercicios): ?>
<section><h2><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></h2><ul>
<?php foreach ($ejercicios as $ruta => $nombre): ?>
<li><a href="<?= htmlspecialchars($ruta, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></a></li>
<?php endforeach; ?></ul></section>
<?php endforeach; ?>
<h2>Modelado relacional</h2>
<p><a href="tareaClase9/modelo.sql">Esquema SQL de ejemplo</a> para las relaciones de empleados, localidades y departamentos.</p>
</main></body></html>
