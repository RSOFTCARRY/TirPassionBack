<php>
<link rel="stylesheet" href="mise-en-vente.css">
</php>
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
        <h1>7 940 annonces neufs et occasions trouvées pour glock</h1>
        <div class="pagination">
            <span>1 2 3 ... 133</span>
        </div>

        <!-- Catégorie -->
        <section class="product-category">
            <h2>Catégorie de mise en vente</h2>
            <textarea placeholder="Précisez la catégorie de votre produit ici"></textarea>
            <button class="btn btn-red">Revenir à la catégorie</button>
        </section>

        <!-- Photos -->
        <section class="product-photos">
            <h2>Photos</h2>
            <div class="photo-container">
                <div class="photo-slot"></div>
                <div class="photo-slot"></div>
                <div class="photo-slot"></div>
                <div class="photo-slot"></div>
            </div>
            <div class="photo-actions">
                <button class="btn btn-red">Ajouter des photos (4/10)</button>
                <button class="btn btn-gray">Tout supprimer</button>
            </div>
        </section>

        <!-- Description -->
        <section class="product-description">
            <h2>Description</h2>
            <input type="text" placeholder="État de l'objet">
            <input type="text" placeholder="Marque">
            <input type="text" placeholder="Modèle">
            <textarea placeholder="Description de l'objet"></textarea>
            <p class="warning">Assurez-vous que votre annonce est conforme aux règles. Sinon, elle peut être refusée.</p>
        </section>

        <!-- Prix -->
        <section class="product-price">
            <h2>Prix</h2>
            <input type="text" placeholder="Prix vendeur (€)">
            <input type="text" placeholder="Prix de l'offre (€)">
        </section>

        <!-- Garanties -->
        <section class="product-guarantees">
            <h2>Garanties</h2>
            <input type="text" placeholder="Nature de la garantie">
            <input type="text" placeholder="Durée (en mois)">
        </section>

        <!-- Livraison -->
        <section class="product-shipping">
            <h2>Livraison</h2>
            <select>
                <option>Choisissez un mode de livraison</option>
                <option>Colissimo</option>
                <option>Chronopost</option>
                <option>Autre</option>
            </select>
        </section>

        <!-- Paiement -->
        <section class="product-payment">
            <h2>Paiement accepté</h2>
            <ul>
                <li><input type="checkbox"> Carte bancaire</li>
                <li><input type="checkbox"> Chèque</li>
                <li><input type="checkbox"> Paiement sécurisé</li>
            </ul>
        </section>
    </div>
</body>
</html>
