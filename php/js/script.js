// On attend que tout le contenu de la page soit chargé avant d'exécuter le script.
document.addEventListener('DOMContentLoaded', function() {

    // 1. On sélectionne le lien "Nos Produits" grâce à son attribut href.
    const productsLink = document.querySelector('a[href="#featured-products"]');
    
    // 2. On sélectionne la section des produits grâce à son ID.
    const productsSection = document.getElementById('featured-products');

    // On vérifie que le lien et la section existent bien sur la page.
    if (productsLink && productsSection) {
        
        // 3. On ajoute un écouteur d'événement sur le clic.
        productsLink.addEventListener('click', function(event) {
            
            // 4. On empêche le comportement par défaut du lien (le saut brusque).
            event.preventDefault();
            
            // 5. On demande au navigateur de défiler en douceur jusqu'à la section.
            productsSection.scrollIntoView({
                behavior: 'smooth'
            });
        });
    }
});