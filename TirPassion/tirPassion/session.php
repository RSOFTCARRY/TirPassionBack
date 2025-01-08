<?php
// Démarrer une session
session_start();

// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'ecommerce';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Initialiser les messages d'erreur
$error_message = '';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifiant = $_POST['identifiant'] ?? '';
    $mot_de_passe = $_POST['mot_de_passe'] ?? '';

    if (!empty($identifiant) && !empty($mot_de_passe)) {
        // Rechercher l'utilisateur par pseudo ou email
        $sql = "SELECT ID, Pseudo, Email, TypeUtilisateur, mot_de_passe FROM utilisateurs 
                WHERE Pseudo = :identifiant OR Email = :identifiant";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['identifiant' => $identifiant]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
            // Enregistrer les informations de l'utilisateur dans la session
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_pseudo'] = $user['Pseudo'];
            $_SESSION['user_type'] = $user['TypeUtilisateur'];

            // Rediriger l'utilisateur (par exemple, vers une page d'accueil)
            header('Location: accueil.php');
            exit;
        } else {
            $error_message = "Identifiant ou mot de passe incorrect.";
        }
    } else {
        $error_message = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php if (!empty($error_message)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="identifiant">Pseudo ou Email :</label><br>
        <input type="text" id="identifiant" name="identifiant" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label><br>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
