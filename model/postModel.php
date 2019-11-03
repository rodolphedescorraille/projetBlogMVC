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

function getCategories ()
{
    $db = connect();

    $query = $db->prepare('SELECT * FROM categories');
    $query->execute();

    return $query->fetchAll();
}

function newPost ($titre,$description,$contenu,$category,$idUser)
{
    $db = connect();

    $query = $db->prepare("INSERT INTO 
                                    `posts`( `imagePath`, `title`, `description`, `content`, `idCategory`, `idUser`) 
                                    VALUES ('','".$titre."','$description','".$contenu."','".$category."','$idUser')");
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

?>
