<?php
// RÔLE 1 : Démarrer la session.
// C'est la ligne la plus importante pour que le panier fonctionne sur toutes les pages.
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vente en ligne de légumes frais et locaux.">
    
    <title>FreshVeg - Vos légumes frais en ligne</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="container">
            <a href="/" id="logo">FreshVeg 🥕</a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">Nos Produits</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="user-actions">
                <a href="panier.php" class="nav-button">Panier 🛒</a>
                <a href="#" class="nav-button">Connexion 👤</a>
            </div>
        </div>
    </header>