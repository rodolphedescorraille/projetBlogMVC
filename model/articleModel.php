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

function getArticle ($flag)
{
    $db = connect();
    $query = $db->prepare("SELECT * FROM `posts` WHERE id ='".$flag."'");
    $query->execute();

    return $query->fetchAll();
}

function getComment ($flag)
{
    $db = connect();
    $query = $db->prepare("SELECT * FROM `comments` WHERE idPost ='".$flag."'");
    $query->execute();

    return $query->fetchAll();
}

function getCategorie ($id)
{
    $db = connect();
    $query = $db->prepare("SELECT `name` FROM `categories` WHERE id ='" .$id."'");
    $query->execute();

    return $query->fetchAll();
}

function getUser ($id)
{
    $db = connect();
    $query = $db->prepare("SELECT `username` FROM `users` WHERE id ='" .$id."'");
    $query->execute();

    return $query->fetchAll();
}

function verifToken ($pseudo,$token)
{
    $db = connect();
    $query = $db->prepare("SELECT `token` FROM `users` WHERE username='".$pseudo."'");
    $query->execute();
    $res = $query->fetchAll();

    if ($res[0]['token'] == $token){
        return 1;
    }else{
        return 0;
    }
}

function sendComment ($comment,$idUser,$idPost)
{
    $db = connect();
    $query = $db->prepare("INSERT INTO `comments`( `content`, `idUsers`, `idPost`) 
                                     VALUES ('".$comment."','".$idUser."','".$idPost."')");
    $query->execute();

    return $query->fetchAll();
}


?>
