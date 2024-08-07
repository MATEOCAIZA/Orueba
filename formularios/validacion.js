document.addEventListener("DOMContentLoaded", () => {
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');

    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            let valid = true;

            // Validar Nombre
            const name = document.querySelector('input[name="name"]');
            const nameError = document.getElementById('name-error');
            if (name.value.trim() === "") {
                nameError.textContent = "El nombre es requerido.";
                valid = false;
            } else {
                nameError.textContent = "";
            }

            // Validar Email
            const email = document.querySelector('input[name="email"]');
            const emailError = document.getElementById('email-error');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                emailError.textContent = "Por favor, ingrese un email válido.";
                valid = false;
            } else {
                emailError.textContent = "";
            }

            // Validar Dirección
            const direction = document.querySelector('input[name="direction"]');
            const directionError = document.getElementById('direction-error');
            if (direction.value.trim() === "") {
                directionError.textContent = "La dirección es requerida.";
                valid = false;
            } else {
                directionError.textContent = "";
            }

            // Validar Teléfono
            const phone = document.querySelector('input[name="phone"]');
            const phoneError = document.getElementById('phone-error');
            const phoneRegex = /^\d+$/;
            if (!phoneRegex.test(phone.value)) {
                phoneError.textContent = "Por favor, ingrese un número de teléfono válido.";
                valid = false;
            } else {
                phoneError.textContent = "";
            }

            // Validar Contraseña
            const password = document.querySelector('input[name="password"]');
            const passwordError = document.getElementById('password-error');
            if (password.value.trim() === "") {
                passwordError.textContent = "La contraseña es requerida.";
                valid = false;
            } else {
                passwordError.textContent = "";
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            let valid = true;

            // Validar Email
            const email = document.querySelector('input[name="email"]');
            const emailError = document.getElementById('login-email-error');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                emailError.textContent = "Por favor, ingrese un email válido.";
                valid = false;
            } else {
                emailError.textContent = "";
            }

            // Validar Contraseña
            const password = document.querySelector('input[name="password"]');
            const passwordError = document.getElementById('login-password-error');
            if (password.value.trim() === "") {
                passwordError.textContent = "La contraseña es requerida.";
                valid = false;
            } else {
                passwordError.textContent = "";
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    }
});
