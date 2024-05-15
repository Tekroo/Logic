<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Logic - Entreprise de construction spécialisée dans le bâtiment, les travaux publics, la vente de béton, et plus encore.">
    <link rel="icon" href="icone/L1.ico" type="image/x-icon" id="h_ico">
    <title>Logic - Contact</title>
    <link rel="stylesheet" href="style/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>
<body> 
    <?php
    include('pages/header.php');
    ?>
    <div name="localisation">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7930.303543147563!2d2.423117988369694!3d6.374399324463294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJ%C3%A9richo%20Cotonou!5e0!3m2!1sfr!2sbj!4v1712671248183!5m2!1sfr!2sbj" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <main class="contain">
        <div>
            <h1>Contactez-Nous</h1>
            <div class="info">
                <img src="icone/localizationtoolformaps_87844.ico" alt="localisation">
                <p>
                    03BP 468 Jericho Cotonou<br> Logic Bénin 
                </p>
            </div>
            <div class="info">
                <img src="icone/mail_email_message_electronic_online_web_icon-icons.com_59986.ico" alt="mail_icon">
                <a href="mailto:logic2007@yahoo.fr">contact@logic.com</a>
            </div>
            <div class="info">
                <img src="icone/phone-handset_icon-icons.com_48252.ico" alt="phone_icon">
                <p><a href="tel:+229 21322151">21322151</a> / <a href="tel:95819769">95819769</a></p>
            </div>
            <form action="sendmail.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Nom et prénom"><br>
                <input type="email" name="mail" id="mail" placeholder="Adresse mail"><br>
                <input type="text" name="mesg" id="mesg" placeholder="Votre message"><br>
                <input type="submit" id="send" value="Envoyer">
            </form>
        </div>
    </main>

    <?php
    include('pages/footer.php');
    ?> 
</body>
</html>