<?php
$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = is_string($_POST['nombre'] ?? null) ? trim($_POST['nombre']) : '';
    $nota = is_string($_POST['nota'] ?? null) ? trim($_POST['nota']) : '';
    if ($nombre === '') $resultado = 'Falta ingresar el nombre del alumno.';
    elseif (strlen($nombre) > 100) $resultado = 'El nombre no debe superar 100 bytes.';
    elseif ($nota === '') $resultado = 'Falta ingresar la nota.';
    elseif (!is_numeric($nota)) $resultado = 'La nota no es un número.';
    else {
        $numero = filter_var($nota, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0, 'max_range' => 10]]);
        if ($numero === false) $resultado = 'La nota debe ser un entero entre 0 y 10.';
        else {
            $categoria = match (true) {
                $numero <= 2 => 'Muy deficiente',
                $numero <= 5 => 'Insuficiente',
                $numero <= 7 => 'Bien',
                $numero <= 9 => 'Notable',
                default => 'Sobresaliente'
            };
            $resultado = "$nombre tiene una nota de $numero y es $categoria.";
        }
    }
}
?>
<!doctype html>
<html lang="es">
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></title>
<link rel="stylesheet" href="../curso.css">
<main>
<h1><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></h1>
<p>Ejercicio local. Usá un nombre ficticio; los datos no se guardan.</p>
<form method="post">
    <label>Nombre <input name="nombre" maxlength="100" required></label>
    <label>Nota entera de 0 a 10 <input type="number" name="nota" min="0" max="10" step="1" required></label>
    <button type="submit">Calificar</button>
</form>
<?php if ($resultado !== ''): ?><p role="status"><?= htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
<a href="../index.php">Volver a los ejercicios</a>
</main>
</html>
