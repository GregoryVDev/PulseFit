<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <title>PulseFit</title>
</head>

<body>
    <main>
        <div class="container-inscription">
            <img src="./images/sallegym.jpg" alt="Salle de gym" class="gym">
            <form method="POST" class="form-login">
                <div class="container-email">
                    <label for="email">Email :</label>
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email">
                </div>
                <div class="container-password">
                    <label for="pass">Mot de passe :</label>
                    <input type="password" class="form-input" name="pass" id="pass" placeholder="Mot de passe">
                    <img src="./images/logos/eye.svg" alt="Afficher/Masquer mot de passe" id="myPass" class="toggle-password">
                </div>
                <div class="container-general">
                    <div class="container-paragraph">
                        <p>Pas de compte ? Cliquez <a href="connexion.php"><span class="orange">ici</span></a></p>
                    </div>
                </div>
                <button type="submit" id="envoie">S'inscrire</button>
                <p class="reduc">* 25% pour votre premier cours. <br>Code promo : <span class="orange">PulseFit</span></p>
            </form>
        </div>
    </main>
</body>

</html>