<?php

require (__DIR__ . '/../model/postModel.php');


$categories = getCategories();

if(isset($_GET['action']) && $_GET['action'] == 'new' ){
    if(isset($_SESSION['token']) && $_SESSION['token'] != '' )
    if(verifToken ($_SESSION['username'],$_SESSION['token'])){
        newPost($_POST['titre'],$_POST['description'],$_POST['contenu'],$_POST['category'],$_SESSION['id']);
    }
}

require (__DIR__ . '/../vew/newArticle.php');

?>
