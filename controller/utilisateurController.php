<?php
require (__DIR__ . '/../model/utilisateurModel.php');
require (__DIR__ . '/../vew/inscription.php');

if( isset($_GET['action']) ){

    if($_GET['action'] == 'inscription'){
        if( ($_POST['mdp1'] == $_POST['mdp2']) && ($_POST['mdp1'] != '') && ($_POST['mdp2'] != '') ){
            if($_POST['pseudo'] != ''){
                if(empty(pseudoVerif($_POST['pseudo']))){
                    if(inscription($_POST['pseudo'],$_POST['mdp1'])){
                        echo 'inscrit!';
                    }
                }
            }
        }
    }
    if($_GET['action'] == 'connexion'){
        if(connexion($_POST['pseudo'],$_POST['mdp'])){
            header('Location:index.php?path=home&action=liste');
        }
    }
    if($_GET['action'] == 'deconnexion'){
        session_destroy ();
        session_abort();
        header('Location: index.php?path=home&action=liste');
    }
}
?>
