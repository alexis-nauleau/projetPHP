<?php
session_start();

use App\Classes\User;

include 'header.php'; ?>

<main>
    <h1>Connexion </h1>


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