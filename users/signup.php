<!DOCTYPE html>
<html>
    <head>
        <title>Inscription utilisateur</title>
    </head>
    <body>
        <h2>Inscription</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username"/><br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password"/><br>
            <label for="password_confirm">Confirmation du mot de passe</label>
            <input type="password" name="password_confirm"/><br>
            <label for="email">Email</label>
            <input type="email" name="email"/><br>
            <input type="submit" value="S'inscrire"/>
        </form>
        <?php 
            include "user.php";

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password_confirm = $_POST['password_confirm'];

                $user = new User($username, $password, $password_confirm, $email);
                
                if($user->signup()) {
                    session_start();

                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;

                    header('../students/index.php');
                }
            }
        ?>
    </body>
</html>