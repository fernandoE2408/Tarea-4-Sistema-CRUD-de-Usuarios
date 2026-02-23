window.onload = function() {
    var form = document.getElementById('miFormulario');

    form.onsubmit = function(e) {
        var nombre = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;

        if (nombre == "") {
            alert("El nombre no puede estar vacío");
            e.preventDefault();
            return false;
        }

        if (email == "") {
            alert("Debes poner un correo");
            e.preventDefault();
            return false;
        }

        if (email.indexOf("@") == -1) {
            alert("El correo debe ser válido (falta la @)");
            e.preventDefault();
            return false;
        }
    }
}