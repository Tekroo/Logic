<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>Nos services > Bâtiment et travaux publics</p>
    </div>
    
    <main>
        <p><span>Bâtiment et travaux publics,</span></p>
        <div class="text">
        Notre savoir faire dans le domaine de la construction nous permet de mener à bien de nombreux projets, qu'il s'agisse de bâtiments résidentiels, commerciaux, ou de travaux publics tels que la construction de routes, de ponts et d'infrastructures artistiques. Nous veillons à ce que vos travaux soit livrés dans les délais prédéfinis conformément au cahier de charge.
        </div>
        <div class="pic">
            <div class="picture">
                <img src="img/batiment4.jpg" alt="">
            </div>
            <div class="picture_content">
                <img src="img/batiment2.jpg" alt="" class="pic_float">
                <img src="img/batiment3.jpg" alt="" class="pic_float">
                <img src="img/batiment1.jpg" alt="" class="pic_float">
                <img src="img/batiment5.jpg" alt="" class="pic_float">
            </div>
        </div>
        <h3>Pour plus d'informations, <a href="contact.php">Contactez-nous</a></3>
    </main>

    <?php
    include('pages/footer.php');
    ?>    
</body>
</html>