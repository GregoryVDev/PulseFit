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
        <div class="container">
            <div class="left-container">
                <img src="./images/sallegym.jpg" alt="Salle de sport">
            </div>
            <div class="right-container">
                <form method="POST" class="form-login">
                    <div class="container-firstname">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-input" name="firstname" id="firstname" placeholder="Prénom">
                    </div>
                    <div class="container-email">
                        <label for="email">E-mail :</label>
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="container-password">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-input" name="password" id="password" placeholder="Mot de passe">
                    </div>
                </form>
                <p>Vous avez un compte ? cliquez <span class="orange">ici</span></p>
            </div>
        </div>
    </main>
</body>

</html>