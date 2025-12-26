alert('JS chargé');

// BURGER MENU TOGGLE
function toggleMenu() {
    const mobileNav = document.getElementById('mobileNav');
    const burger = document.querySelector('.burger-menu');
    mobileNav.classList.toggle('active');
    burger.classList.toggle('active');
}

// SCRIPT CARTES MÂLES 
function openTab(evt, tabName) {
    // Récupérer la carte parente
    const card = evt.target.closest('.dog-card');

    // Cacher tous les contenus d'onglets dans cette carte
    const tabContents = card.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
        content.classList.remove('active');
    });

    // Retirer la classe active de tous les boutons dans cette carte
    const tabButtons = card.querySelectorAll('.tab-btn');
    tabButtons.forEach(btn => {
        btn.classList.remove('active');
    });

    // Afficher le contenu sélectionné
    document.getElementById(tabName).classList.add('active');

    // Activer le bouton cliqué
    evt.target.classList.add('active');
}

