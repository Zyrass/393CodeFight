<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?= WEBSITE_TITLE . ' | ' . ucfirst($page) ?></title>
        <?php 
            // Inclusion des métas données.
            include 'partials/_head.php'; 
        ?>
    </head>
    
    <body>
        <main>
            <h1><?= ucfirst($page); ?> de <?= $_SESSION['pseudo']; ?></h1>
            <hr>
            <!-- Page Content -->
            <p>Bienvenue sur ce site ou vous trouverez un jeu interactif conçu spécialement en tant que projet perso pour la 3WA afin d'obtenir mon diplôme.</p>
            <p>En revanche, si vous êtes un recruteur et que ce jeu vous plaît n'hésiter pas à me contacter afin d'envisager un quelconque entretien.</p>
            <button class="btn_home" id="btn_connexion">Connexion</button>
            <button class="btn_home" id="btn_inscription">Inscription</button>
            <button class="btn_home" id="btn_mentions_legales">Mentions Légales</button>
        </main>
        <?php                
            // Inclusion des modals de la page home.
            require PATH_MODAL.'modal_home.php';
        ?>

        <script src="<?= PATH_JS.'home/home_modal.js'; ?>"></script>
    </body>
</html>