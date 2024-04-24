<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p>Nos services > Bâtiment et travaux publics</p>
    </div>
    
    <main>
        <p><span>Bâtiment et travaux publics,</span></p>
        <div class="text">
        Notre expertise en construction de bâtiments et en travaux publics nous permet de réaliser une large gammes de projets, qu'il s'agisse de bâtiments résidentiels, commerciaux ou industriels, ou de travaux publics tels que la construction de routes, de ponts et d'ouvrages d'art. Nous nous engageons à livrer des projets de haute qualité, dans les délais convenus et en respectant les normes les plus strictes de sécurité et de durabilité.
        </div>
        <div class="picture">
            <img src="img/batiment1.jpg" alt="">
        </div>
        <div class="picture_content">
            <img src="img/batiment2.jpg" alt="" class="pic_float">
            <img src="img/batiment3.jpg" alt="" class="pic_float">
            <img src="img/batiment4.jpg" alt="" class="pic_float">
            <img src="img/batiment5.jpg" alt="" class="pic_float">
        </div>
        <h3>Pour plus d'informations, <a href="contact.php">Contactez-nous</a></3>
    </main>

    <?php
    include('pages/footer.php');
    ?>    
</body>
</html>