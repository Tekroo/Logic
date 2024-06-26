<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logic - Entreprise de construction spécialisée dans le bâtiment, les travaux publics, la vente de béton, et plus encore.">
    <link rel="icon" href="icone/L1.ico" type="image/x-icon" id="h_ico">
    <title>Logique - Equipe</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/equipe.css">
    <script src="script/script.js" defer></script>
</head>
<body>
    <?php
    include('pages/header.php');
    ?>

    <div class="equi_acceuil">
        <h1>Notre équipe</h1>
    </div>

    <main id="equi_main">
        <div class="dg">
            <img src="img/dg.jpg" alt="">
            <div class="text"> 
                <h3>Mot du Directeur, </h3><br>
                <p>
                    Chez <span>Logic</span>, nous croyons fermement en la puissance de la construction pour façonner un avenir meilleur. Depuis notre fondation, nous nous sommes engagés à fournir des services de qualité exceptionnelle, à réaliser des projets qui transforment les communautés et à construire des relations solides avec nos clients et partenaires. <br>Nous sommes fiers de notre équipe talentueuse et dévouée, qui travaille sans relâche pour réaliser les aspirations et les visions de nos clients. Que ce soit pour construire des infrastructures essentielles, rénover des bâtiments historiques ou développer des solutions innovantes, nous sommes là pour répondre à tous vos besoins en matière de construction. En parcourant notre site, j'espère que vous découvrirez notre passion pour l'excellence, notre engagement envers la durabilité et notre détermination à réaliser des projets qui font la différence. <br>N'hésitez pas à nous contacter pour discuter de vos projets et découvrir comment nous pouvons vous accompagner dans leur réalisation. <br><br>Bien cordialement,<br>
                    <span id="dg_name">Bonaventure AHEHEHINNOU </span><br> 
                    Directeur Général <br>
                    <span>Logic</span>
                </p>
            </div>
        </div>
        <div class="team">
            <h1>Notre équipe</h1>
            <p>Notre équipe est composée de professionnels dévoués et expérimentés qui s'engagent à fournir un service de qualité</p>
            <div class="team_content">
                <div class="member">
                    <h3>Ingénieur bâtiment</h3>
                    <img src="img/agent1.png" alt="Image d'un membre" id="m_img">
                    <p>Eric</p>
                    <ul>
                        <li><a href="#"><img src="icone/FB_icon-icons.com_65484.ico" alt="facebook_img"></a></li>
                        <li><a href="#"><img src="icone/LINKEDIN_icon-icons.com_65488.ico" alt="linkedIn_img"></a></li>
                        <li><a href="#"><img src="icone/twitter_x_new_logo_x_icon_256077.ico" alt="twitter_img"></a></li>
                    </ul>
                </div>
                <div class="member">
                    <h3>Technicien géomètre</h3>
                    <img src="img/agent2.png" alt="Image d'un membre" id="m_img">
                    <p>Angelin</p>
                    <ul>
                        <li><a href="#"><img src="icone/FB_icon-icons.com_65484.ico" alt="facebook_img"></a></li>
                        <li><a href="#"><img src="icone/LINKEDIN_icon-icons.com_65488.ico" alt="linkedIn_img"></a></li>
                        <li><a href="#"><img src="icone/twitter_x_new_logo_x_icon_256077.ico" alt="twitter_img"></a></li>
                    </ul>
                </div>
                <div class="member">
                    <h3>Conducteur d’engins</h3>
                    <img src="img/agent1.png" alt="Image d'un membre" id="m_img">
                    <p>Ulrich</p>
                    <ul>
                        <li><a href="#"><img src="icone/FB_icon-icons.com_65484.ico" alt="facebook_img"></a></li>
                        <li><a href="#"><img src="icone/LINKEDIN_icon-icons.com_65488.ico" alt="linkedIn_img"></a></li>
                        <li><a href="#"><img src="icone/twitter_x_new_logo_x_icon_256077.ico" alt="twitter_img"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <?php
    include('pages/footer.php');
    ?>
</body>
</html>