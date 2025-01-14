<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - Page</title>
    <link rel="stylesheet" href="produit.css">
</head>
<body>
    <div class="container">
        <!-- Colonne gauche - Miniatures -->
        <div class="left-column thumbnails">
            <img src="/TirPassion/tirPassion/photo/Echelon.png" alt="Thumbnail 1" class="thumbnail">
            <img src="/TirPassion/tirPassion/photo/Echelon.png" class="thumbnail">
            <img src="/TirPassion/tirPassion/photo/Echelon.png" alt="Thumbnail 3" class="thumbnail">
        </div>

        <!-- Colonne centrale - Image principale -->
        <div class="photo-principale">
            <img src="/TirPassion/tirPassion/photo/Echelon.png" alt="Image principale" class="main-image">
        </div>

        <!-- Colonne droite - Détails -->
        <div class="right-column details-section">
            <h2>TITRE</h2>
            <p class="reference">Référence produit : XYZ12345</p>
            <img src="/TirPassion/tirPassion/logo/LOGO MARQUE.png" alt="Logo Marque" class="logo">
            <p class="price">Prix : <span class="price-value">120,00 €</span></p>
            <div class="discount">
                <span class="discount-value">-20%</span>
                <span class="discounted-price">96,00 €</span>
            </div>
            <div class="quantity">
                <button id="decrease-qty">-</button>
                <span id="quantity">1</span>
                <button id="increase-qty">+</button>
            </div>
            <button class="add-to-cart">AJOUTER AU PANIER</button>
        </div>
    </div>

    <!-- Description -->
    <div class="description">
        <h3>Caractéristiques du produit</h3>
        <p>
            Le pistolet Springfield Armory Echelon version standard (non fileté) représente l'avant-garde de la technologie et de l'innovation en matière d'armement.
            <br><br>
            Caractéristiques principales :
            <br>
            - Calibre : 9 mm<br>
            - Canon : 4.5" (10.8 cm) acier forgé<br>
            - Cap
