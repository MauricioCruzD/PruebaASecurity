function validaForm(e) {
    var formul = document.getElementById("usersForm");
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    
    var emailRegExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name == "" || email == "" ) {
        alert("Por favor, completa todos los campos.");
        return false; 
    }
    
    //EL campo email se valida por el tipo de input del formulario. Si es extrictamente necesario se puede usar una Expr Regular
    //var emailRegExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegExp.test(email)) {
        alert("Confirma que tu email sea correcto.");
        return false; 
    }

    if (name.length < 5) {
        alert("Tu nombre debe tener al menos 5 letras.");
        return false;  
    }

    return true;
}