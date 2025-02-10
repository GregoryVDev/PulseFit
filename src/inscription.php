<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PulseFit</title>
</head>

<body>
    <main>
        <div class="container-inscription">
            <img src="./images/sallegym.jpg" alt="Salle de gym" class="gym">
            <form method="POST" class="form-login">
                <div class="container-firstname">
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" class="form-input" name="pseudo" id="pseudo" placeholder="Pseudo">
                </div>
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
                    <div class="container-politique">
                        <label for="checkbox" class="custom-checkbox">
                            <p>J'accepte <a href="privacy.php" class="politique">la politique de confidentialité</p></a>
                        </label>
                        <input type="checkbox" id="checkbox" name="terms">
                    </div>
                    <div class="container-paragraph">
                        <p>Déjà un compte ? Cliquez <a href="connexion.php"><span class="orange">ici</span></a></p>
                    </div>
                </div>
                <button type="submit" id="envoie">S'inscrire</button>
            </form>
        </div>
    </main>
</body>

</html>