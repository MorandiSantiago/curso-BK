"""Comprobaciones de ejercicios contra un servidor PHP local."""
from pathlib import Path
import os
import re
import unittest
import urllib.parse
import urllib.request

BASE = os.environ.get("CURSO_BASE_URL", "http://127.0.0.1:8089").rstrip("/")
if urllib.parse.urlparse(BASE).hostname not in ("localhost", "127.0.0.1"):
    raise RuntimeError("Solo se admite un servidor local.")

def pagina(path, data=None):
    payload = urllib.parse.urlencode(data, doseq=True).encode() if data is not None else None
    with urllib.request.urlopen(BASE + "/" + urllib.parse.quote(path, safe="/"), payload, timeout=10) as response:
        return response.read().decode("utf-8")

class Ejercicios(unittest.TestCase):
    def test_paginas_sin_errores_php(self):
        root = Path(__file__).resolve().parents[1]
        for path in root.rglob("*.php"):
            if path.parts[-2] == "lib": continue
            with self.subTest(path=path.name):
                text = pagina(path.relative_to(root).as_posix())
                self.assertNotRegex(text, r"(Warning:|Fatal error:|Parse error:|Undefined variable)")
                self.assertTrue(text.strip())

    def test_bucles_y_factorial(self):
        text = pagina("tareaClase5.php")
        self.assertIn("Suma del 1 al 20: 210", text)
        self.assertIn("Suma de pares del 1 al 20: 110", text)
        odds = text.split("<h2>Impares del 1 al 20</h2>")[1].split("<p>")[0]
        self.assertEqual(re.findall(r"\d+", odds), [str(n) for n in range(1, 20, 2)])
        self.assertIn("40320", pagina("tareaClase6/ejercicio1.php"))

    def test_arrays_y_funciones(self):
        self.assertEqual(re.findall(r"(\d+)<br>", pagina("tareaClase7/ejercicio1.php")),
                         [str(n) for n in range(2, 21, 2)])
        self.assertIn("25", pagina("tareaClase8/ejercicio1A.php"))
        self.assertIn("HOLA MUNDO", pagina("tareaClase8/ejercicio1B.php"))
        self.assertIn("28", pagina("tareaClase8/ejercicio1C.php"))
        self.assertIn("neuquen", pagina("tareaClase8/ejercicio1D.php"))

    def test_notas_y_datos_invalidos(self):
        for page in ("ejercicio2.php", "ejercicio3.php"):
            path = "tareaClase6/" + page
            for nota, esperado in [("0", "Muy deficiente"), ("2", "Muy deficiente"), ("3", "Insuficiente"),
                                   ("5", "Insuficiente"), ("6", "Bien"), ("7", "Bien"),
                                   ("8", "Notable"), ("9", "Notable"), ("10", "Sobresaliente"),
                                   ("11", "entero entre 0 y 10"), ("-1", "entero entre 0 y 10"),
                                   ("7.5", "entero entre 0 y 10"), ("abc", "no es un número"),
                                   ("", "Falta ingresar la nota")]:
                with self.subTest(page=page, nota=nota):
                    self.assertIn(esperado, pagina(path, {"nombre": "Alumno ficticio", "nota": nota}))
            self.assertIn("Falta ingresar el nombre", pagina(path, {}))
            text = pagina(path, {"nombre": "<script>alert(1)</script>", "nota": "8"})
            self.assertNotIn("<script>alert", text)
            self.assertIn("&lt;script&gt;", text)
            self.assertIn("Falta ingresar el nombre", pagina(path, {"nombre[]": ["a", "b"], "nota": "8"}))

if __name__ == "__main__":
    unittest.main(verbosity=2)
