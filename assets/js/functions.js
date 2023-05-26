

function CheckSigninForm() {
    var nom = document.getElementById("name").value;
    var pass = document.getElementById("password1").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;

    console.log(nom);

    if (nom.length < 4) {
        alert("Les noms d'utilisateur de moins de 4 lettres ne sont pas autorisés!")
    }
    else if (!email.includes("@")) {
        alert("L'adresse email n'est pas valide")
    }
    else if (pass.length == 0) {
        alert("Le champ du mot de passe ne doit pas être vide!")
    }
    else if (phone.length < 10 || phone.length > 12) {
        alert("Le numéro de téléphone n'est pas valide")
    }
    else {
        alert("Compte créé avec succès !")
    }
}

function CheckLoginForm() {
    var pass = document.getElementById("password2").value;
    var email = document.getElementById("email").value;

    if (pass.length == 0) {
        alert("Le champ du mot de passe ne doit pas être vide!")
    }
    else {
        alert("Authentification réussie")
    }
}