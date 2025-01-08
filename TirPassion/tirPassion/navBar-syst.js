function login() {
    fetch('login.php')
        .then(response => response.text())
        .then(data => {
            console.log(data);
            window.location.href = 'http://localhost/TirPassion/tirPassion/indexTirPassion.php';  // Recharge la page après connexion
        })
        .catch(error => console.error('Error logging in:', error));
}

function logout() {
    fetch('logout.php')
        .then(response => response.text())
        .then(data => {
            console.log(data);
            window.location.href = 'http://localhost/TirPassion/tirPassion/indexTirPassion.php';  // Recharge la page après déconnexion
        })
        .catch(error => console.error('Error logging out:', error));
}

function register() {
    // Logique pour l'inscription, si nécessaire
    login(); // Supposons qu'après l'inscription, l'utilisateur est connecté
}

function toggleButtons(isLoggedIn) {
    var loginButton = document.getElementById('loginButton');
    var registerButton = document.getElementById('registerButton');
    var logoutButton = document.getElementById('logoutButton');

    if (isLoggedIn) {
        if (loginButton) loginButton.style.display = 'none';
        if (registerButton) registerButton.style.display = 'none';
        if (logoutButton) logoutButton.style.display = 'inline';
    } else {
        if (loginButton) loginButton.style.display = 'inline';
        if (registerButton) registerButton.style.display = 'inline';
        if (logoutButton) logoutButton.style.display = 'none';
    }
}
