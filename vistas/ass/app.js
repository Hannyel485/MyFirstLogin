const email = document.getElementById('mail');
const pass = document.getElementById('password');
const btn = document.getElementById('submit');
const warnings = document.getElementById('warnings');
const form = document.getElementById('form')

let pepe = form.addEventListener('submit', (e)=>{
    const warning = document.createElement('li')
    var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    let test = expReg.test(email.value)
    if (test == false) {
        warning.textContent = 'Este correo no es invalido'
        warnings.appendChild(warning)
    }

    if (pass.value.length < 4) {
        warning.textContent = 'Su contraseña es muy corta'
        warnings.appendChild(warning)
    }

    
});


