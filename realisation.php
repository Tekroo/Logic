<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logic - Entreprise de construction spécialisée dans le bâtiment, les travaux publics, la vente de béton, et plus encore.">
    <link rel="icon" href="icone/L1.ico" type="image/x-icon" id="h_ico">
    <title>Logic - Réalisations</title>
    <link rel="stylesheet" href="style/realisation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js" defer></script>
</head>
<body>
    <?php
    include('pages/header.php');
    ?>

    <div class="rea_acceuil">
        <h1>Nos réalisations</h1>
    </div>
 
    <main> 
    <ul class="menu">
            <li><a href="#" class="filter" data-filter="all">All</a></li>
            <li><a href="#" class="filter" data-filter="bat">Bâtiments et travaux publics</a></li>
            <li><a href="#" class="filter" data-filter="ame">Aménagement de pistes</a></li>
            <li><a href="#" class="filter" data-filter="pre">Préfa</a></li>
    </ul>

        <div class="rea_content bat">
            <div class="texte">
                <h4>Latrine Mairie Parakou</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
            <img src="img/latrine2.jpg" alt="">
        <hr id="hre">
        </div>
        <div class="rea_content bat">
            <img src="img/destruct.jpg" alt="">
            <div class="texte">
                <h4>Démolition batiment HASSAN II</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
        <hr id="hre">
        </div>
        <div class="rea_content ame">
            <div class="texte">
                <h4>Pistes PACER</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
            <img src="img/piste.jpg" alt="">
        <hr id="hre">
        </div>
        <div class="rea_content ame">
            <img src="img/pave.jpg" alt="">
            <div class="texte">
                <h4>Pavage Kalalé</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
        <hr id="hre">
        </div>
        <div class="rea_content pre">
            <div class="texte">
                <h4>Caserne Allada</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div> 
            <img src="img/bat2.png" alt="">
        <hr id="hre">
        </div>
        <div class="rea_content pre">
            <img src="img/aguegue.jpg" alt="">
            <div class="texte">
                <h4>Chantier Aguégué</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
        <hr id="hre">
        </div>     
        <div class="rea_content pre">
            <div class="texte">
                <h4>Magasin de stockage</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nostrum autem aliquid dignissimos excepturi, iste dicta, tempore beatae iure vel eius facilis voluptate? Ipsum architecto obcaecati doloribus illum veniam at? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex eum error cum nostrum nam ipsum excepturi natus assumenda! Molestiae et laborum saepe eligendi harum optio delectus asperiores aliquam numquam consequuntur.
            </div>
            <img src="img/rea2.jpg" alt="">
        </div>
    </main>

    <?php
    include('pages/footer.php');
    ?>  
</body>
</html>