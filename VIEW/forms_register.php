<?php
    require '../MODEL/Log.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>INSCRIPTION</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
                        
            <form action="#" class="col-12 sinscrire" method="post">

                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input class="input" type="text" name="nom" placeholder="Nom"/>
                    <span class="verif_champ_vide"><?php echo $nomError?></span>
                </div>

                <div class="form-group">
                    <label for="prenom">Pénom:</label>
                    <input class="input" type="text" name="prenom" placeholder="Prenom"/>
                    <span class="verif_champ_vide"><?php echo $prenomError?></span>
                </div>

                <div class="form-group">
                    <label for="pw">Entrer un mot de passe:</label>
                    <input class="input" type="text" name="pw" placeholder="mot de passe"/>
                    <span class="verif_champ_vide"><?php echo $pwError?></span>
                </div>

                <div class="form-group">
                    <label for="email">email:</label>
                    <input class="input" type="email" name="email" placeholder="e-mail"/>
                    <span class="verif_champ_vide"><?php echo $emailError?></span>
                </div>

                <input type="submit" class="btn" name="submit" value="CRÉER UN COMPTE"><br>
    
                <!-- <div class="rgpd">
                    <input class="ckeck" type="checkbox" class="checkbox" name="ckeck">
                    <label for="check">Accepter RGPD et les Conditions Générales d'Utilisation <a href="cgu.html">Lire RGPD et CGU</a></label> 
                </div> -->
    
                <p class="message">vous avez déjà un compte ? <a class="lienConnect" href="forms_connect.php"> SE CONNECTER </a></p>
    
            </form>
       
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>