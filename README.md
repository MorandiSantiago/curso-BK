# Ejercicios de programación web · PHP, HTML, CSS y JavaScript

Repositorio de aprendizaje del curso backend de 2023. Conserva ejercicios básicos y prácticas visuales para mostrar el proceso de aprendizaje. En octubre de 2026 se corrigieron resultados erróneos, formularios sin comportamiento y recursos inexistentes.

**Estado:** ejercicios ejecutables y prácticas demostrativas. No es una aplicación comercial ni un sistema de autenticación.

## Ejecutar

Requisito: PHP 8.1 o superior (validado con PHP 8.4). Desde la raíz:

```sh
php -S 127.0.0.1:8089
```

Abrir [http://127.0.0.1:8089](http://127.0.0.1:8089). No abrir los archivos PHP directamente como archivos locales.

Alternativa Docker desde PowerShell, sin instalar PHP:

```powershell
docker run --rm -p 127.0.0.1:8089:80 --mount "type=bind,source=$PWD,target=/var/www/html,readonly" php:8.4-apache
```

## Contenido

| Sección | Qué demuestra |
| --- | --- |
| Clases 3 y 4 | Variables, conversiones, operaciones y decisiones; división entera con `intdiv` |
| Clase 5 | Bucles, pares/impares y sumas independientes |
| Clase 6 | Factorial y formularios con validación del nombre y nota entera entre 0 y 10 |
| Clase 7 | Arrays indexados/asociativos y formularios de productos en memoria |
| Clase 8 | Funciones: área/perímetro, mayúsculas/minúsculas, días del mes y palíndromos simples |
| Tabla de cantidades | Actualización de subtotales y total desde botones |
| Tarjetas 3D | Efecto visual y selección explícita de una tarjeta |
| Login | Cambio entre formularios y confirmación simulada, sin enviar o guardar credenciales |
| Clase 9 | Dos modelos relacionales en SQL y consigna académica original |

El [índice](./index.php) enlaza los ejercicios. Los formularios de notas no guardan datos. Los productos del ejercicio de agregar/editar existen solo en memoria y se reinician al recargar. Las funciones de texto son ejemplos ASCII; los días de febrero corresponden a un año no bisiesto.

## Modelo SQL

[modelo.sql](./tareaClase9/modelo.sql) traduce las dos consignas del curso a tablas con claves primarias, únicas y foráneas:

1. Empleados → localidades → provincias → regiones. Varios empleados pueden pertenecer a la misma localidad.
2. Empleados → departamentos y jefe opcional. La clave compuesta asegura que el jefe pertenezca al mismo departamento.

Ejecutarlo **una vez en una base vacía** MySQL 8 / MariaDB con restricciones CHECK habilitadas; se validó en MariaDB 11.4. El segundo modelo requiere crear primero el departamento sin jefe, luego sus empleados y finalmente asignar el jefe. El script no contiene datos personales ni crea automáticamente una base.

## Validación de la revisión

- 17 archivos PHP sin errores de sintaxis.
- Pruebas HTTP de salidas, arrays, funciones, validaciones y escape de HTML.
- Comprobación en navegador de agregar/editar, cantidades, selección y simulación de formulario.
- SQL ejecutado en MariaDB: claves foráneas y rechazo de un jefe ajeno al departamento.

Para repetir las comprobaciones HTTP, con el servidor activo:

```sh
python tests/test_ejercicios.py
```

Se utiliza Python 3 y su biblioteca estándar. Las pruebas HTTP solo admiten localhost.

## Alcance

Las prácticas visuales están completas dentro de su objetivo didáctico: no crean cuentas, no realizan compras y no persisten información. Para desarrollo de autenticación, permisos y pedidos con base de datos, ver el proyecto independiente [PROYECTOFINAL](https://github.com/MorandiSantiago/PROYECTOFINAL).

Se mantienen las imágenes heredadas del curso como material de práctica, sin atribuir su autoría al desarrollador.
