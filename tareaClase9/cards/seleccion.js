document.querySelectorAll('.buy-button').forEach((button, index) => {
    button.addEventListener('click', () => {
        document.getElementById('seleccion').textContent = `Tarjeta ${index + 1} seleccionada. Es una práctica visual.`;
    });
});
