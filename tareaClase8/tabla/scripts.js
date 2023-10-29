
//aca lo que hago es que cuando se cargue el DOM, se ejecute la funcion que esta adentro
//es decir la funcion que calcula el total.
document.addEventListener('DOMContentLoaded', function () {
    function calcularTotal() {
        const filas = document.querySelectorAll('tbody tr');
        let total = 0;

        filas.forEach((fila) => {
            const cantidad = parseInt(fila.querySelector('.quantity').textContent);
            const precio = parseFloat(fila.querySelector('td:nth-child(3)').textContent.slice(1)); //td:nth-child(3) es el tercer td de la fila
            const filaTotal = cantidad * precio;
            fila.querySelector('td:nth-child(5)').textContent = '$' + filaTotal.toFixed(2);
            total += filaTotal;
        });

        document.querySelector('.total p').textContent = 'Total de la compra: $' + total.toFixed(2);
    }
//aca lo que voy a hacer es que cuando se haga click en el boton de aumentar o disminuir, se ejecute la funcion
    const increaseButtons = document.querySelectorAll('.quantity-button.increase');
    const decreaseButtons = document.querySelectorAll('.quantity-button.decrease');

    increaseButtons.forEach(button => {
        button.addEventListener('click', function () {
            const row = this.closest('tr');
            const quantityElement = row.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = quantity + 1;
            calcularTotal();
        });
    });

    decreaseButtons.forEach(button => {
        button.addEventListener('click', function () {
            const row = this.closest('tr');
            const quantityElement = row.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent);
            if (quantity > 0) {
                quantityElement.textContent = quantity - 1;
                calcularTotal();
            }
        });
    });

    document.getElementById('calculate-button').addEventListener('click', calcularTotal);
});
