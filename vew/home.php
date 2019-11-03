
  <!-- Navigation -->
  <?php
    require_once('navbar.php');
    $flag = 0;
  ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">

        <h1 class="my-4">home</h1>

        <?php
        foreach ($info as $v) {
        ?>
            <div class="card mb-4">
                <img class="card-img-top" src="
                <?php
                if($v['imagePath'] == '') {
                        echo "vew/image/vide.png";
                      }else{
                        echo"vew/image/".$v['imagePath'];
                      }
                ?>
                " alt="image de l'article">
                <div class="card-body">
                    <h2 class="card-title"><?=$v['title']?></h2>
                    <p class="card-text"><?=$v['description']?></p>
                    <a href="index.php?path=article&action=show&id=<?= $v['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
            </div>

        <?php
        $flag = $v['id'];
        }
        ?>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <?php
            if(($min[0]['MIN(id)'] + 10) < $flag){
            ?>
             <li class="page-item">
                 <a class="page-link" href="index.php?path=home&action=liste&number=<?= ($flag - 10) ?>">&larr; Older</a>
             </li>
            <?php
            }elseif ($flag > 10 ){
            ?>
            <li class="page-item">
                 <a class="page-link" href="index.php?path=home&action=liste">&larr; Older</a>
            </li>
            <?php
            }
            ?>

            <?php
            if($max[0]['MAX(id)'] > $flag){
            ?>
              <a class="page-link" href="index.php?path=home&action=liste&number=<?= $flag ?>">Newer &rarr;</a>

            <?php
            }
            ?>
        </ul>

      </div>

    </div>
  </div>
