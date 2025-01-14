<?php

if (session_status()===PHP_SESSION_NONE) {
    session_start();
}
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'tirpassion';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
    
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
// header("Access-Control-Allow-Credentials: true"); // Nécessaire pour les sessions et cookies
// header("Content-Type: application/json");

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'] ?? null;

if (!$email || !$password){

    echo json_encode([
        "session_id" => session_id(),
        "session_data" => $_SESSION,
        // "cookies" => $_COOKIE,

    ]);
    exit;
}
try {
    // Rechercher l'utilisateur dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM users WHERE Pseudo = :identifiant OR Email = :identifiant");
    $stmt->execute(['identifiant' => $identifiant]);
    $user = $stmt->fetch(PDO::FETCH_OBJ); //  données sous forme d'objet

    // Vérif utilisateur et mot de passe est ok
    if ($user && $user->password === $password) { //APRES INSCRIPTION JE FERAI password_verify
        // Stocker les informations utilisateur dans la session
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;

        // Retourner les informations utilisateur
        echo json_encode([
            'success' => true,
            'message' => 'Connexion réussie.',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ]
        ]);
    } else {
        // Réponse en cas d'erreur de connexion
        echo json_encode([
            'success' => false,
            'error' => 'Email ou mot de passe incorrect.'
        ]);
    }
} catch (Exception $e) {
    // Gestion des erreurs serveur
    echo json_encode([
        'success' => false,
        'error' => 'Une erreur est survenue : ' . $e->getMessage()
    ]);
}
} else {
// Si la méthode HTTP n'est pas POST, renvoyer une erreur
echo json_encode([
    'success' => false,
    'error' => 'Méthode non autorisée.'
]);
exit;

}

?>