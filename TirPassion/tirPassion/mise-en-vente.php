<?php
// Démarrer une session (optionnel selon vos besoins)
session_start();

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

// Initialiser les messages
$message = '';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $categorie = $_POST['categorie'] ?? '';
    $etat = $_POST['etat'] ?? '';
    $marque = $_POST['marque'] ?? '';
    $modele = $_POST['modele'] ?? '';
    $description = $_POST['description'] ?? '';
    $prix_base = $_POST['prix_base'] ?? 0;
    $prix_offre = $_POST['prix_offre'] ?? 0;
    $photos = $_FILES['photos'] ?? null;

    // Insérer les données dans la table articles
    $sql = "INSERT INTO articles (
                Titre, Ref, PhotoPrincipale, PrixBase, PrixReduit, DescriptionCourte, TitreDescription, Description, VendeurID
            ) VALUES (
                :titre, :ref, :photo_principale, :prix_base, :prix_reduit, :description_courte, :titre_description, :description, :vendeur_id
            )";

    // Exemple de valeurs (ajustez selon votre table et votre formulaire)
    $stmt = $pdo->prepare($sql);
    $ref = uniqid('ART-'); // Génération d'une référence unique
    $stmt->execute([
        'titre' => "$marque $modele",
        'ref' => $ref,
        'photo_principale' => 'placeholder.jpg', // Ajoutez ici la gestion des fichiers uploadés
        'prix_base' => $prix_base,
        'prix_reduit' => $prix_offre,
        'description_courte' => substr($description, 0, 100),
        'titre_description' => "$marque - $modele",
        'description' => $description,
        'vendeur_id' => 1, // Par exemple, l'ID du vendeur connecté
    ]);

    $message = "L'article a été ajouté avec succès !";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en Vente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="product-container">
        <h1>Mettez votre article en vente</h1>
        <?php if (!empty($message)): ?>
            <p style="color: green;"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <!-- Formulaire de mise en vente -->
        <form method="POST" action="mise-en-vente.php" enctype="multipart/form-data">
            <!-- Catégorie -->
            <section class="product-category">
                <h2>Catégorie de mise en vente</h2>
                <textarea name="categorie" placeholder="Précisez la catégorie de votre produit ici"></textarea>
            </section>

            <!-- Description -->
            <section class="product-description">
                <h2>Description</h2>
                <input type="text" name="etat" placeholder="État de l'objet">
                <input type="text" name="marque" placeholder="Marque">
                <input type="text" name="modele" placeholder="Modèle">
                <textarea name="description" placeholder="Description de l'objet"></textarea>
            </section>

            <!-- Prix -->
            <section class="product-price">
                <h2>Prix</h2>
                <input type="text" name="prix_base" placeholder="Prix vendeur (€)">
                <input type="text" name="prix_offre" placeholder="Prix de l'offre (€)">
            </section>

            <!-- Photos -->
            <section class="product-photos">
                <h2>Photos</h2>
                <input type="file" name="photos[]" multiple>
            </section>

            <button type="submit">Mettre en vente</button>
        </form>
    </div>
</body>
</html>
