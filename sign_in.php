

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="../assets/css/sign_in.css">
</head>
<body>
    <main>

    <div class="formulaire">
    <form  method="POST" action="../config/login.php">
        <h1><u>sign in</u></h1>
        <label for="name">name</label><br>
        <input type="text"  name="nom" id="name" minlength="2" required><br>
        <label for="prenom">prenom</label><br>
        <input type="text" name="prenom" id="prenom" minlength="4" required><br>
        <label for="email">e-mail</label><br>
        <input type="text" name="email"  id="email" required><br>
        <label for="password">password</label><br>
        <input type="text"  name="pass" id="password" required><br>
        <label for="confirm_password">comfirm password</label><br>
        <input type="text"  name="confirm_pass" id="confirm_password" required><br>
        <input type="checkbox" class="checkbox" ><label for="" class="check" required> 
            accepter les contraintes de confidentialite
        </label>
        <button type="submit" name="submit">comfirm</button>

        <p> vous avez deja un compte?<a href="sign_up.php">sign up</a></p>
    </form>
    </div>
    <div class="image">
        <h1>Bluepods</h1>
    </div>
    </main>

    <script>
		function afficherMasquer() {
			var mdp = document.getElementById("password");
			if (mdp.type === "password") {
				mdp.type = "text";
			} else {
				mdp.type = "password";
			}
            }
            function afficherMasquer() {
            var mdp = document.getElementById("confirm_password");
			if (mdp.type === "password") {
				mdp.type = "text";
			} else {
				mdp.type = "password";
			}
		}
	</script>

</body>
</html>


