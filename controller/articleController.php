<?php
require (__DIR__ .'/../model/articleModel.php');

if( isset($_GET['action']) ){

    if($_GET['action'] == 'show'){

        if(isset($_GET['id'])){
            $info = getArticle($_GET['id']);
            $info[0]['category'] = getCategorie($info[0]['idCategory']);
            $info[0]['user']= getUser($info[0]['idUser']);

            $comments = getComment($_GET['id']);
            foreach ($comments as $key => $v){
                $res = getUser($v['idUsers']);
                $comments[$key]['user']=$res[0]['username'];
            }
        }
    }
    if($_GET['action'] == 'comment'){

        if( isset($_SESSION['token'] ) && $_SESSION['token'] != '' ){
            if(verifToken ($_SESSION['username'],$_SESSION['token'])){
                if($_POST['comment'] != ''){
                    sendComment($_POST['comment'],$_SESSION['id'],$_GET['id']);
                }
            }
        }else{
            echo "connecter vous pour pouvoir poster des commentaires !";
        }
        if(isset($_GET['id'])){
            $info = getArticle($_GET['id']);
            $info[0]['category'] = getCategorie($info[0]['idCategory']);
            $info[0]['user']= getUser($info[0]['idUser']);

            $comments = getComment($_GET['id']);
            foreach ($comments as $key => $v){
                $res = getUser($v['idUsers']);
                $comments[$key]['user']=$res[0]['username'];
            }
        }
    }
}

require (__DIR__ . '/../vew/article.php');
?>
