<?php
    require('../config/connexion.php');
   session_start();

?>
<?php
    include ('../includes/connexionuser.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="../assets/css/sign_up.css">
</head>
<body>
    <main>
    <div class="formulaire">
    <form action="" method="POST">
        <h1><u>sign up</u></h1> <br><br>
        <label for="email">e-mail</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">password</label><br>
        <input type="text" id="password" name="pass"><br>
        <button type="submit" name="submit">comfirm</button>
        <p> vous n'avez pas un compte?<a href="sign_in.php">sign in</a></p>
    </form>
    </div>
    <div class="image">
        <h1>Bluepods</h1>
    </div>
    </main>
</body>
</html>


<?php
// Connexion à la base de données MySQL
$host = 'localhost';
$dbname = 'bluepod';
$username = 'root';
$password = '';

if(isset($_POST['submit'])){
    extract($_POST);

    connexionBD($host , $dbname , $username, $password);

    if(!empty($email) AND !empty($pass)){
        $email = htmlspecialchars('$email');
        $pass = htmlspecialchars('$pass');



        $user = getuser($email , $pass);
        if($user){
            $_SESSION['fkedfjh'] = $user;

            header('Location: ../views/Accueil.php');
        }else{
            echo'il y a un probleme';
        }
    }

}

?>
