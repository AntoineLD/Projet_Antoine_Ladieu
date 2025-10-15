<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vente en ligne de légumes frais et locaux.">
    
    <title>FreshLeg - Vos légumes frais en ligne</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <section id="hero">
            <div class="container">
                <h2>Le meilleur du marché, directement dans votre cuisine.</h2>
                <p>Des légumes de saison, cueillis avec soin par nos producteurs locaux.</p>
                <a href="#featured-products" class="cta-button">Découvrir notre sélection</a>
            </div>
        </section>

        <section id="featured-products">
            <div class="container">
                <h3>Les incontournables du moment</h3>
                
                <div class="products-grid">
                
                    <article class="product-card">
                        <img src="assets/img/tomates.png" alt="Grappe de tomates bio juteuses">
                        <div class="card-content">
                            <h4>Tomates Cœur de Bœuf Bio</h4>
                            <p class="product-price">4.50€ / kg</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="assets/img/carottes.png" alt="Botte de carottes nouvelles">
                        <div class="card-content">
                            <h4>Carottes des Sables</h4>
                            <p class="product-price">2.80€ / botte</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="assets/img/courgette.png" alt="Courgettes vertes bio">
                        <div class="card-content">
                            <h4>Courgettes Vertes Bio</h4>
                            <p class="product-price">3.20€ / kg</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>
                    
                    <article class="product-card">
                        <img src="assets/img/haricots_verts.png" alt="Haricots verts frais">
                        <div class="card-content">
                            <h4>Haricots verts Bio</h4>
                            <p class="product-price">2.50€ / kg</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>
                    
                    <article class="product-card">
                        <img src="assets/img/haricots_blancs.png" alt="Haricots blancs secs">
                        <div class="card-content">
                            <h4>Haricots</h4>
                            <p class="product-price">2.00€ / kg</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>
                    
                    <article class="product-card">
                        <img src="assets/img/céleri.png" alt="Branche de céleri fraîche">
                        <div class="card-content">
                            <h4>Branche de céleri Bio</h4>
                            <p class="product-price">1.00€ / branche</p>
                            <button class="add-to-cart-button">Ajouter au panier</button>
                        </div>
                    </article>

                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>