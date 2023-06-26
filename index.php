<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <?php include 'head.inc.php'; ?>
    <link rel="stylesheet" href="/public/assets/css/index.css">
</head>
<body>
<div class="cover">
    <div class="gray">
        <p class="name content-to-fade">Antonin Pamart</p>
    </div>
    <div class="white">
        <p class="job content-to-fade">Développeur Web</p>
    </div>
    <img src="/public/assets/image/logoLanding.svg" alt="logo" class="logoLanding content-to-fade">
</div>


<div class="main-content">
    <?php require 'header.inc.php'; ?>


    <main>

    </main>
    <?php require 'footer.inc.php'; ?>
</div>
<script src="/public/assets/javascript/transition.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // Ajout de la classe 'loaded-fade' immédiatement pour déclencher l'animation de fondu
        document.body.classList.add('loaded-fade');

        // Ajout de la classe 'loaded' après une seconde pour déclencher l'animation de glissement
        setTimeout(function() {
            document.body.classList.add('loaded');
        }, 1000);

        const cover = document.querySelector('.cover');

        // Détection de la fin de l'animation
        cover.addEventListener('animationend', (e) => {
            // Seulement si l'animation qui se termine est 'slideOutRight' ou 'slideOutLeft'
            if(e.animationName === 'slideOutRight' || e.animationName === 'slideOutLeft') {
                // Application de 'display: none' à la fin de l'animation
                cover.style.display = 'none';
            }
        });
    });


</script>

</body>
</html>
