const wrapper = document.querySelector ('.wrapper');
const loginLink = document.querySelector('.login-register');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', event => {
        event.preventDefault();
        document.getElementById('resultado-demo').textContent = 'Formulario válido. Simulación finalizada sin guardar datos.';
        form.reset();
        wrapper.classList.remove('active-popup');
    });
});


registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});
loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});
btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});


