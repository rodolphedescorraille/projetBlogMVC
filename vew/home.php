
  <!-- Navigation -->
  <?php
    require_once('navbar.php');
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
                <div class="card-footer text-muted">
                    Posted by <?=$v['user'][0]['username']?>
                    <br>
                    category : <?=$v['category'][0]['name']?>
                </div>
            </div>

        <?php
        }
        ?>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

    </div>
  </div>
