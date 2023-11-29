var filtre = new RegExp("^[A-Za-z]+$");
var filtremail = new RegExp("^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}\\.[A-Za-z]{2,4}$");
let form = document.getElementById('form1');
login_error = document.getElementById('login_error');
nom_error = document.getElementById('nom_error');
prenom_error = document.getElementById('prenom_error');
password_error = document.getElementById('password_error');
mail_error = document.getElementById('mail_error');

    function complex_password(password) {
        
        if (password.length < 8) {
            return false;
        }
    
        if (!/[A-Z]/.test(password)) {
            return false;
        }
    
        if (!/[a-z]/.test(password)) {
            return false;
        }
    
        if (!/[0-9]/.test(password)) {
            return false;
        }
    
        return true;
    }

form.addEventListener('submit', (e) => {

    login_error.innerHTML = "";
    nom_error.innerHTML = "";
    prenom_error.innerHTML = "";
    password_error.innerHTML = "";
    mail_error.innerHTML = "";

    var password_verif = complex_password(form.elements['password'].value);

    if (form.elements['login'].value === '' || form.elements['login'].value === null) {
        login_error.innerHTML = "Veuillez saisir un login.";
        e.preventDefault();
    } else if (form.elements['login'].value.length < 8) {
        login_error.innerHTML = "Le login doit comporter au moins 8 caractères.";
        e.preventDefault();
    }

    if (form.elements['nom'].value === '' || form.elements['nom'].value === null) {
        nom_error.innerHTML = "Veuillez renseigner un nom.";
        e.preventDefault();
    } else if (filtre.test(form.elements['nom'].value) === false) {
        nom_error.innerHTML = "Veuillez renseigner un nom valide.";
        e.preventDefault();
    }

    if (form.elements['prenom'].value === '' || form.elements['prenom'].value === null) {
        prenom_error.innerHTML = "Veuillez renseigner le prénom.";
        e.preventDefault();
    } else if (filtre.test(form.elements['prenom'].value) === false) {
        prenom_error.innerHTML = "Veuillez renseigner un prénom valide.";
        e.preventDefault();
    }

    if (form.elements['password'].value === '' || form.elements['password'].value === null) {
        password_error.innerHTML = "Le mot de passe ne doit pas être vide.";
        e.preventDefault();
    } else if (password_verif === false) {
        password_error.innerHTML = "Le mot de passe ne contient pas 8 caractères ainsi qu'une majuscule et une minuscule et un chiffre.";
        e.preventDefault();
    }

    if (form.elements['mail'].value === '') {
        mail_error.innerHTML = "Veuillez renseigner l'adresse mail.";
        e.preventDefault();
    } else if (filtremail.test(form.elements['mail'].value) === false) {
        mail_error.innerHTML = "L'adresse mail n'est pas valide.";
        e.preventDefault();
    }

    if (form.elements['password'].value !== form.elements['password_verif'].value) {
        password_error.innerHTML = "Les deux mots de passe ne correspondent pas.";
        e.preventDefault();
    }
});
