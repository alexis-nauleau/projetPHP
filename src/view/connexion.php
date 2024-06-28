<?php
session_start();



use App\Classes\User;

 include 'header.php'; ?>


<?php


if (!empty($_POST)) {
    //var_dump($_POST);
if( ! isset( $_SESSION['compte'] ) ) $_SESSION['compte'] = "";

$_SESSION['compte'] = $_POST['email'];


    include 'bdd.php';
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

        //var_dump($result);
        if ($result) {
            if (password_verify($password, $result->password)) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Connexion réussie</div>";

                sleep(1);
                header('location:news.php');
            } else {
                $errors['password']="Mot de passe invalide";
            }
        } else {
            $errors['name'] = "Identifiant invalide";
        }
    }
}



?><main><h1>Connexion </h1>
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

<form action="" method="post">
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
</main>

<?php include 'footer.php'; ?>