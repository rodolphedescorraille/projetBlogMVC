

  <!-- Navigation -->
  <?php
    require_once('navbar.php');
  ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="
                <?php
            if($info[0]['imagePath'] == '') {
                echo "vew/image/vide.png";
            }else{
                echo"vew/image/".$info[0]['imagePath'];
            }
            ?>
                " alt="image de l'article">
          <div class="card-body">
            <h1 class="card-title"><?=$info[0]['title']?></h1>
            <p class="card-text"><?=$info[0]['content']?></p>

          </div>
          <div class="card-footer text-muted">
            Posted by <?= $info[0]['user'][0]['username'] ?>
              <br>
            category : <?= $info[0]['category'][0]['name'] ?>
              <br>
              <!-- <button type="submit" class="btn btn-primary ">delet</button> -->
          </div>
        </div>
        <div class="card mb-4">
            <form method="post" action="index.php?path=article&action=comment&id=<?=$_GET['id']?>">
                <div class="form-group ">
                    <input type="text" class="form-control"  name="comment" placeholder="comment...">
                </div>
                <button type="submit" class="btn btn-primary ">Submit</button>
            </form>

        </div>

          <?php
          foreach($comments as $v) {
          ?>

              <div class="card mb-4">
                  <form>
                      <p class="card-text"><?=$v['content']?></p>
                      <div class="card-footer text-muted">
                          Posted by <?=$v['user']?>
                      </div>
                  </form>
              </div>
          <?php
          }
          ?>

      </div>

    </div>
    <!-- /.row -->

  </div>
