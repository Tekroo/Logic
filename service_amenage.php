<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logic - Entreprise de construction spécialisée dans le bâtiment, les travaux publics, la vente de béton, et plus encore.">
    <link rel="icon" href="icone/L1.ico" type="image/x-icon" id="h_ico">
    <title>Logic - Services</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/service.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="script/service.js"></script>
    <script src="script/script.js" defer></script>
</head>
<body>  
    <?php
    include('pages/header.php');
    ?>
    <div class="service_acceuil">
        <h1>Nos services</h1>
        <p>Nos services > Assainissement et Aménagement des pistes</p>
    </div>
    
    <main>
        <p><span>Assainissement et Aménagement des pistes,</span></p>
        <div class="text">
            Notre gamme de services englobe la construction, la rénovation et l'entretien des routes, des chemins de terre et des pistes pour garantir une circulation fluide, sécurisée et durable. Nous sommes déterminés à mettre en place les systèmes de drainage et d'assainissement nécessaires pour prévenir les problèmes liés à l'eau et à l'érosion, assurant ainsi des infrastructures routières résilientes et pérennes.
            Nous proposons également des services d'assainissement pour assurer des environnements sains et sûrs, ainsi que des services d'aménagement des pistes visant à créer et entretenir des voies de circulation efficaces. Que ce soit pour des projets urbains ou ruraux, nous disposons des compétences et des équipements nécessaires pour répondre à vos besoins en matière d'assainissement et d'aménagement des pistes.
        </div>
        <div class="picture"> 
            <img src="img/Rothau.jpg" alt="">
        </div>
        <div class="picture_content">
            <img src="img/amenage2.jpg" alt="" class="pic_float">
            <img src="img/route.jpeg" alt="" class="pic_float">
            <img src="img/pathway-244494_1920.jpg" alt="" class="pic_float">
            <img src="img/amenage1.jpg" alt="" class="pic_float">
        </div>
        <h3>Pour plus d'informations, <a href="contact.php">Contactez-nous</a></3>
    </main>

    <?php
    include('pages/footer.php');
    ?>    
</body>
</html>