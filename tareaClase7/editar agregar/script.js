let formularioAbierto = ''; // Variable para realizar un seguimiento del formulario abierto

// mostrar un formulario y cambiar el fondo al hacer clic en "Editar" o "Agregar"
function mostrarFormulario(formularioId, fondoCssClass) {
    if (formularioAbierto === formularioId) {
        // Si el formulario que se hizo clic ya está abierto, ciérralo y restaura el fondo por defecto
        document.getElementById(formularioId).style.display = 'none';
        formularioAbierto = '';
        document.body.classList.remove(fondoCssClass);
    } else {
        // Si el formulario que se hizo clic no está abierto, cierra el otro formulario (si está abierto) y cambia el fondo
        if (formularioAbierto) {
            document.getElementById(formularioAbierto).style.display = 'none';
        }
        // Muestra el formulario que se hizo clic
        document.getElementById(formularioId).style.display = 'block';
        formularioAbierto = formularioId;
        document.body.classList.add(fondoCssClass);
    }
}

// ocultar el formulario al hacer clic "Cancelar"
function ocultarFormulario(formularioId) {
    document.getElementById(formularioId).style.display = 'none';
    formularioAbierto = '';
    document.body.classList.remove('editar-fondo', 'agregar-fondo');
}

// eventos "Editar" y "Agregar"
document.getElementById('editar-button').addEventListener('click', function() {
    mostrarFormulario('editar-producto', 'editar-fondo');
});

document.getElementById('agregar-button').addEventListener('click', function() {
    mostrarFormulario('agregar-producto', 'agregar-fondo');
});

document.getElementById('cancelar-editar').addEventListener('click', function() {
    ocultarFormulario('editar-producto');
});

document.getElementById('cancelar-agregar').addEventListener('click', function() {
    ocultarFormulario('agregar-producto');
});
