<?php
session_start();

use App\Classes\User;

include 'header.php';

if (!empty($_POST)) {

    if (!isset($_SESSION['compte'])) $_SESSION['compte'] = "";

    $_SESSION['compte'] = $_POST['email'];

    $errors = array();

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "SELECT email, password FROM user WHERE email=:val"; // val  est un motif

    $pdoStatement = $pdo->prepare($sql);
    if ($pdoStatement) {
        $pdoStatement->execute(['val' => $email]); // transforme le motif
        $result = $pdoStatement->fetch();
        // on veut comparer le mot de passe saisie depuis le formulaire avec
        // le mot de passe haché récupéré depuis la base de données

        if ($result) {
            if (password_verify($password, $result->password)) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Connexion réussie</div>";

                sleep(1);
                header('location:index.php');
            } else {
                $errors['password'] = "Mot de passe invalide";
            }
        } else {
            $errors['name'] = "Identifiant invalide";
        }
    }
}

?><main>
    <h1>Connexion </h1>
    <?php if (!empty($errors)) : ?>
        <div class="erreur">
            <div class="alert alert-secondary" role="alert">
                Vous n'avez pas rempli le formulaire correctement
            </div>

            <?php foreach ($errors as $error) : ?>
                <div><?php echo "<div class=\"alert alert-danger\" role=\"alert\">$error</div>"; ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

        <form action="" method="post" id="loginForm">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="email" name="email">
                <label for="floatingInput">email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary login" type="submit">Se connecter</button>
        </form>

    <!-- ajouter en dernier -->
    <form action="" method="get" id="factorForm">
        <code-input name="code" size="6" value="" legend="Entrer le code à 6 chiffres généré par votre application"></code-input>
        <button type="submit">Envoyer</button>
    </form>
    <script src="../view/JS/source.js"></script>
</main>
<script>
    document.getElementBy('factorForm').style.display = 'none';
    document.addEventListener('DOMContentLoaded', function() {
        if (<?php echo isset($_SESSION['login_success']) && $_SESSION['login_success'] === true ? 'true' : 'false'; ?>) {
            document.getElementById('factorForm').style.display = 'block';
        } else {
            document.getElementById('factorForm').style.display = 'none';
        }
    });
</script>

    <?php include 'footer.php'; ?>