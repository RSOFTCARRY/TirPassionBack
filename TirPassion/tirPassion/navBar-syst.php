<!DOCTYPE html>
<html>
<head>
    <title>Connexion et Déconnexion</title>
    <style>
        #logoutButton {
            display: none;
        }
    </style>
</head>
<body>
    <button id="loginButton" onclick="toggleButtons()">Se connecter</button>
    <button id="logoutButton" onclick="toggleButtons()">Se déconnecter</button>

    <script>
        function toggleButtons() {
            var loginButton = document.getElementById('loginButton');
            var logoutButton = document.getElementById('logoutButton');
            
            if (loginButton.style.display === 'none') {
                loginButton.style.display = 'inline';
                logoutButton.style.display = 'none';
            } else {
                loginButton.style.display = 'none';
                logoutButton.style.display = 'inline';
            }
        }
    </script>
</body>
</html>



