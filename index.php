<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="blog de cigarillos prod">
        <title>Cigarillos Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="vew/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="vew/css/blog-home.css" rel="stylesheet">
    </head>

    <body>
    <?php
    session_start();
    require_once('vew/navbar.php');
    ?>
        <?php
            if( isset($_GET['path']) ){

                if($_GET['path'] == 'post'){

                    require_once('controller/postController.php');

                }else if($_GET['path']== 'inscription'){

                    require_once('controller/utilisateurController.php');

                }else if($_GET['path']== 'home'){

                    require_once('controller/homeController.php');

                }else if($_GET['path']== 'article'){

                    require_once('controller/articleController.php');

                }else{

                    require_once('vew/404.php');

                }

            }else{

                require_once('vew/404.php');

            }
        ?>
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">C'est pas moi qui est fait le théme / 20</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vew/vendor/jquery/jquery.min.js"></script>
        <script src="vew/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
