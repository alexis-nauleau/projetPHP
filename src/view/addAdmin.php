<?php
include 'header.php';



if (!empty($_POST)) {
   $errors=array();
    

    if(empty($_POST['name']) || !preg_match( '/^[a-z-]+$/i',$_POST['name'])){
        $errors['name'] = "nom invalide";
 
    }
    if(empty($_POST['lastName']) || !preg_match('/^[a-z-]+$/i',$_POST['lastName'])){
        $errors['lastName'] = "prénom invalide";
 
    }
    if(empty($_POST['email']) || !preg_match('/^[0-9a-z-.]+@[0-9a-z-.]+\.[a-z]{2,4}$/i',$_POST['email'])){
        $errors['email']="email non valide";}

    $password = $_POST['password'];
    $passwordHache = password_hash($password, PASSWORD_DEFAULT);



    $photo = $_FILES['photo']['name'];
    if(empty($errors)){
    $req = $pdo->prepare("INSERT INTO user SET name=?,lastName=?,dateDeNaissance=?,email=?,password=?,photo=?");

    $req->execute([$_POST['name'], $_POST['lastName'],$_POST['dateDeNaissance'], $_POST['email'], $passwordHache,$photo]);
    //$req->debugDumpParams();
   // echo "<div class=\"alert alert-success\" role=\"alert\">Ajout réussie</div>";
   // sleep(5);
    header('location:connexion.php'); 

    }
    }





?><main><h1>Ajout Utilisateur</h1>
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="nom" name="name">
        <label for="floatingInput">nom</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="prénom" name="lastName">
        <label for="floatingInput">prenom</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" placeholder="dateDeNaissance" name="dateDeNaissance">
        <label for="floatingInput">dateDeNaissance</label>
    </div>
    <div class="form-floating mb-3">
        <input type="mail" class="form-control" id="floatingInput" placeholder="email" name="email">
        <label for="floatingInput">email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
        <label for="floatingInput">password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput"  name="photo">
        <label for="floatingInput">Picture</label>
    </div>

    <button class="btn btn-primary" type="submit">Se connecter</button>
</form>
  </main>