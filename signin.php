<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Raleway:wght@500&family=Roboto+Slab:wght@500&family=Rubik&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
    <title>CharityHUB | Signup</title>
    </head>
    <body>
    <div id="king" class="king"> 
        <div class="logoDiv">
            <div class="logo">
                <a href="./index.html"><img src="../assets/images/charity-logo.png" alt=""></a>
                <p>Your virtual safe <span>place</span> to share your <span>words</span></p>
            </div>
        </div>

        <div class="formDiv">
            <video width="100%" height="99.97%" autoplay muted loop>
                <source src="../assets/videos/bg3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>

            <div class="bord c">
			    <div class="title">Créez votre compte!</div>
               
			        <form class="form" method="post" style="<?php if($newAccountStatus["Successful"]) echo "display: none";   ?>">
				        <input id="username"type="text" name="username" placeholder="Nom d'utilisateur">
				        <input  id="email" type="email" name="email" placeholder="Email">
				        <input id="mdp"type="password" name="mdp" placeholder="Mot de passe">
                        <input id="mdpc" type="password" name="mdpc" placeholder="Confirmation de mot de passe">
				        <input id="date"type = "date" name="date">
                        <button id="signup-btn" name="k" class="btn" type="submit">Connexion</button>
			        </form>
                    <div class="linkSignup">
                        <a href="./login.php"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
</body>

    </body>

</html>