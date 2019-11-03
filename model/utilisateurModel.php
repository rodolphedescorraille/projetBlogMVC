<?php
require_once (__DIR__ . '/../config/config.php');

function connect ()
{
    try {
        return new PDO(
            sprintf('mysql:host=%s;dbname=%s', DATABASE_CONFIG['host'], DATABASE_CONFIG['database']),
            DATABASE_CONFIG['user'],
            DATABASE_CONFIG['password']
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function pseudoVerif ($pseudo)
{
    $db = connect();

    $query = $db->prepare("SELECT username FROM `users` WHERE username ='" .$pseudo."'");
    $query->execute();

    return $query->fetchAll();
}

function inscription ($pseudo,$mdp)
{
    $db = connect();
    $query = $db->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('".$pseudo."','".$mdp."')");
    $query->execute();

    return 1;
}

function connexion ($pseudo,$mdp)
{
    $pseudoBDD = pseudoVerif($pseudo);
    if(isset($pseudoBDD[0]['username']) && $pseudoBDD[0]['username'] == $pseudo){

        $db = connect();
        $query = $db->prepare("SELECT `password` FROM `users` WHERE username='".$pseudo."'");
        $query->execute();
        $res = $query->fetchAll();

        if ($res[0]['password'] == $mdp){

            $token = md5(uniqid(mt_rand(), true));

            //injection du token
            $db = connect();
            $query = $db->prepare("UPDATE `users` SET `token`='".$token."' WHERE username ='".$pseudo."'");
            $query->execute();

            //récupération des infos pour la session
            $db = connect();
            $query = $db->prepare("SELECT * FROM `users` WHERE username = '".$pseudo."'");
            $query->execute();
            $infosUser = $query->fetchAll();

            $_SESSION['id'] = $infosUser[0]['id'];
            $_SESSION['username'] = $infosUser[0]['username'];
            $_SESSION['token'] = $infosUser[0]['token'];

            return 1;

        }else{

            echo 'mot de passe incorrecte...';
            return 0;
        }
    }else{

        echo 'compte inexistant...';
        return 0;
    }

}


?>
