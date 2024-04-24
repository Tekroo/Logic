<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logic - Entreprise de construction spécialisée dans le bâtiment, les travaux publics, la vente de béton, et plus encore.">
    <link rel="icon" href="icone/L1.ico" type="image/x-icon" id="h_ico">
    <title>Logic - Services</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/service.css">
    <script src="script/service.js"></script>
</head>
<body>
    <?php
    include('pages/header.php');
    ?>
    <div class="service_acceuil">
        <h1>Nos services</h1>
        <p>Nos services > Vente de béton</p>
    </div>
    
    <main>
        <p><span>Vente de béton,</span></p>
        <div class="text">
            Nous fournissons du béton de haute qualité prêt à l'emploi aux entreprises de construction, aux entrepreneurs et aux particuliers pour tous vos besoins en construction. Que ce soit pour des fondations, des dalles ou des structures, notre béton est conçu pour offrir une résistance et une durabilité exceptionnelles.
        </div>
        <div class="picture">
            <img src="img/R.jpg" alt="">
        </div>
        <div class="picture_content">
            <img src="img/Brico.jpg" alt="" class="pic_float">
            <img src="img/MachineBeton.jpg" alt="" class="pic_float">
            <img src="img/beton_meule.jpg" alt="" class="pic_float">
            <img src="img/BETON .jpg" alt="" class="pic_float">
        </div>
        <h3>Pour plus d'informations, <a href="contact.php">Contactez-nous</a></3>
    </main>

    <?php
    include('pages/footer.php');
    ?>    
</body>
</html>