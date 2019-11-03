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

function getMaxArticleId ()
{
    $db = connect();
    $query = $db->prepare("SELECT MAX(id) FROM `posts`");
    $query->execute();

    return  $query->fetchAll();
}

function getMinArticleId ()
{
    $db = connect();
    $query = $db->prepare("SELECT MIN(id) FROM `posts`");
    $query->execute();

    return  $query->fetchAll();
}

function getArticle ($flag)
{
    $db = connect();
    $query = $db->prepare("SELECT * FROM `posts` WHERE id >'" .$flag."' LIMIT 10");
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


?>
