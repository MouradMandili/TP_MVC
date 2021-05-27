<?php
    require 'Database.php';

    $nomError = $prenomError = $pwError = $emailError = $nom = $prenom = $pw = $email = "";

    if(!empty($_POST))
    {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $pw = $_POST["pw"];
        $email = $_POST["email"];

        $cBon = true;
    
        if(empty($nom))
        {
            $nomError = 'Il me faut un nom mec !!!';
            $cBon = false;
        }

        if(empty($prenom))
        {
            $prenomError = 'ce champ est obligatoire m enerve paaaas!';
            $cBon = false;
        }

        if(empty($email))
        {
            $emailError = 'Aller file moi ton email';
            $cBon = false;
        }

        if(empty($pw))
        {
            $pwError = 'Celà est agassant, un mot de passe Bordeeeeeel';
            $cBon = false;
        }
        echo $cBon;
        if($cBon)
        {
            echo "inside";
            $db = Database::connect();
            $requete = "INSERT INTO user (nom, prénom, email, mdp) VALUES (:nom, :prenom, :email, :mdp);";
            $maRequet = $db->prepare($requete);
            $maRequet->bindParam(':nom', $nom);
            $maRequet->bindParam(':prenom', $prenom);
            $maRequet->bindParam(':email', $email);
            $maRequet->bindParam(':mdp', $pw);
            $maRequet->execute();
            header("Location: ./forms_connect.php");
        } 

    }
    

?>