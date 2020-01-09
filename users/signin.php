<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="username">Utilisateur</label>
            <input type="text" name="username"/><br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password"/><br>
            <input type="submit" value="Se connecter"/>
        </form>
    </body>
    <?php 
        include "user.php";
        session_start();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
                header("../users/index.php");
            }
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = new User($username, $password, null, null);

            if($user->signin()) {
                header("../students/index.php");
            }
        }

    ?>
</html>