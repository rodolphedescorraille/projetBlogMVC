<?php
require (__DIR__ . '/../model/homeModel.php');

if( isset($_GET['action']) ){

    if($_GET['action'] == 'liste'){

        if(isset($_GET['number'])){
            $info = getArticle($_GET['number']);
            $info[0]['category'] = getCategorie($info[0]['idCategory']);
            $info[0]['user']= getUser($info[0]['idUser']);
        }else{
            $info = getArticle(0);
            $info[0]['category'] = getCategorie($info[0]['idCategory']);
            $info[0]['user']= getUser($info[0]['idUser']);
        }

    }
}

require (__DIR__ . '/../vew/home.php');
?>
