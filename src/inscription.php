<?php include "./template/navbar.php" ?>
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
            <p class="reduc">* -25% pour votre premier cours. <br>Code promo : <span class="orange">PulseFit</span></p>
        </form>
    </div>
</main>
</body>
<scripte src="../js/burger.js"></scripte>

</html>