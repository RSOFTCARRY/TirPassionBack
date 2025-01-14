<php>
<link rel="stylesheet" href="profil.css">
</php>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="profil-section">
        <div class="profil-header">
            <h1>Profil <span class="profil-type">vendeur</span></h1>
            <div class="profil-toggle">
                <button class="toggle-button active">Vendeur</button>
                <button class="toggle-button">Acheteur</button>
            </div>
        </div>
        <form class="profil-form">
            <div class="form-row">
                <input type="text" placeholder="Nom" value="">
                <input type="text" placeholder="Prénom" value="">
                <input type="email" placeholder="Email" value="">
                <input type="tel" placeholder="Téléphone" value="">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Adresse" value="">
                <input type="text" placeholder="Code postal" value="">
                <input type="text" placeholder="Ville" value="">
            </div>
            <div class="form-row">
                <input type="text" placeholder="Nom de votre société" value="">
                <input type="text" placeholder="SIRET" value="">
                <input type="text" placeholder="Nom de votre armurerie" value="">
                <input type="text" placeholder="Numéro de SIA" value="">
                <input type="text" placeholder="Nom de votre boutique Tir Passion" value="">
            </div>
            <h1> Téléchargement</h1>
            <div class="form-row">
                <label for="file-upload" class="file-upload-label">Votre pièce d'identité</label>
                <label for="file-upload" class="file-upload-label">Votre K-BIS</label>
                <label for="file-upload" class="file-upload-label">Votre Autorisation de commerce</label>
                <label for="file-upload" class="file-upload-label">Votre AFCI</label>
                <label for="file-upload" class="file-upload-label">Votre Licence</label>
                <label for="file-upload" class="file-upload-label">Votre Permis de chasse</label>
                <label for="file-upload" class="file-upload-label">Votre Certificat médical</label>
                
                <input type="file" id="file-upload">
            </div>
            <div class="form-actions">
                <button type="button" class="action-button">Modifier</button>
                <button type="button" class="action-button secondary">Retour accueil</button>
            </div>
        </form>
    </section>

    <section class="products-section">
        <h2>VOS DERNIÈRES MISE EN VENTE</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="path/to/AR-15.png" alt="AR-15">
                <p class="product-title">Carabine Schmeisser AR15</p>
                <p class="product-price">2387,70 €</p>
                <p class="product-status">Neuf - Sur commande fournisseur</p>
            </div>
            <div class="product-card">
                <img src="path/to/Echelon.png" alt="Echelon">
                <p class="product-title">Pistolet Springfield Armory</p>
                <p class="product-price">800,00 €</p>
                <p class="product-status">Neuf - En stock</p>
            </div>
            <div class="product-card">
                <img src="path/to/PSL.png" alt="PSL">
                <p class="product-title">Fusil PSL</p>
                <p class="product-price">2600,00 €</p>
                <p class="product-status">Occasion - Sur commande fournisseur</p>
            </div>
            <div class="product-card">
                <img src="path/to/Glock19X.png" alt="Glock 19 X">
                <p class="product-title">Glock 19 X Coyote</p>
                <p class="product-price">750,00 €</p>
                <p class="product-status">Occasion - En stock</p>
            </div>
        </div>
    </section>
</body>
</html>
