

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1>nouvelle article</h1>
          <br>
          <form method="post" action="index.php?path=post&action=new">
              <div class="form-group">
                  <input type="text" class="form-control"  name="titre" placeholder="titre">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  name="description" placeholder="description(250 caractères)">
              </div>
              <br>
              <div class="form-group">
                  <input type="text" class="form-control"  name="contenu" placeholder="contenu">
              </div>
              <select name="category">
              <?php
                foreach($categories as $categorie){
                    echo "<option value=".$categorie['id'].">".$categorie['name']."</option>";
                }
              ?>
              </select>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
      </div>
    </div>
  </div>


