# projetBlogMVC

installation :

1.  récupérer le fichier : mydb.sql (localisation : racine)

2.  installer la BDD sur PHPMyAdmin

3.  Modifier le fichier config.php (localisation : racine/config/config.php)

3.  aller sur le navigateur pour trouver 
    la page homme il vous sufira de taper 
    ces deux arguments après l'index pour tomber sur la page home:

    "index.php?path=home&action=liste"
    
NOTE :

    j'ai rencontré un problème avec les accents. je pensses que le problème
    viens de la BDD qui est en interclassement : latin_swedish_ci (je n'ais
    pas eu le temps de le changer).
    
    Je n'ais pas eu le temps de faire le DELETE et le UPDATE des articles et 
    commentaire.
    
    J'aurais pus reconcentrer certain controller. Il existe des doublons de 
    fonction dans certain controller. J'aurais pus faire certain controller
    plus compacte.
    
    Je n'ais pas mis l'ajout de photo dans le formulaire de création
    de postes mais le code prend en conpte le path en BDD. 
    Si le path n'existe pas alors on prend un fichier de base 
    (vide.png)
    
    Le thème utiliser est un thème bootstrap que j'ai un peux modifier.
    
 P.S. : courage et bonne chance pour les corrections 
 
 P.S.2 : lien de la chène YOUTUBE : https://www.youtube.com/channel/UCHXUPIo7745yKMssv_ytBIw
    
     
