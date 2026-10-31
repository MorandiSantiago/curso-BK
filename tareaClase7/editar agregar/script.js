const productos = [{nombre: 'Lámpara de ejemplo', descripcion: 'Datos ficticios', precio: 1500}];
let editando = null;
const selector = document.getElementById('producto');
const editor = document.getElementById('editor');
const formulario = document.getElementById('formulario');
const nombre = document.getElementById('nombre');
const descripcion = document.getElementById('descripcion');
const precio = document.getElementById('precio');
const resultado = document.getElementById('resultado');
function renderizar() {
    selector.replaceChildren();
    const lista = document.getElementById('productos');
    lista.replaceChildren();
    productos.forEach((producto, indice) => {
        const opcion = document.createElement('option');
        opcion.value = indice; opcion.textContent = producto.nombre; selector.append(opcion);
        const item = document.createElement('li');
        item.textContent = producto.nombre + ': ' + producto.descripcion + ' · $' + producto.precio.toFixed(2);
        lista.append(item);
    });
}
function abrir(indice) {
    editando = indice; formulario.reset();
    document.body.classList.remove('editar-fondo', 'agregar-fondo');
    document.body.classList.add(indice === null ? 'agregar-fondo' : 'editar-fondo');
    document.getElementById('titulo-formulario').textContent = indice === null ? 'Agregar producto' : 'Editar producto';
    if (indice !== null) {
        nombre.value = productos[indice].nombre;
        descripcion.value = productos[indice].descripcion;
        precio.value = productos[indice].precio;
    }
    editor.hidden = false; nombre.focus();
}
function cerrar() {
    editor.hidden = true; document.body.classList.remove('editar-fondo', 'agregar-fondo');
}
document.getElementById('agregar-button').addEventListener('click', () => abrir(null));
document.getElementById('editar-button').addEventListener('click', () => abrir(Number(selector.value)));
document.getElementById('cancelar').addEventListener('click', cerrar);
formulario.addEventListener('submit', event => {
    event.preventDefault();
    const valor = Number(precio.value);
    if (!nombre.value.trim() || !descripcion.value.trim() || !Number.isFinite(valor) || valor <= 0 || valor > 999999.99) {
        resultado.textContent = 'Completá los textos y un precio válido.'; return;
    }
    const producto = {nombre: nombre.value.trim(), descripcion: descripcion.value.trim(), precio: Math.round(valor * 100) / 100};
    if (editando === null) productos.push(producto); else productos[editando] = producto;
    resultado.textContent = editando === null ? 'Producto agregado en memoria.' : 'Producto modificado en memoria.';
    renderizar(); cerrar();
});
renderizar();
