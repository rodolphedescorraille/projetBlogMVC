
  <?php
    require_once('navbar.php');
  ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
        <div class="col-md-1">

        </div>
      <div class="col-md-4">
          <h1>inscription</h1>
          <br>
          <form method="post" action="index.php?path=inscription&action=inscription">
              <div class="form-group">
                  <input type="text" class="form-control"  name="pseudo" placeholder="pseudo">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  name="mdp1" placeholder="mot de passe 1">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  name="mdp2" placeholder="mot de passe 2">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
      </div>
        <div class="col-md-2">

        </div>
      <div class="col-md-4">
          <h1>connexion</h1>
          <br>
          <form method="post" action="index.php?path=inscription&action=connexion">
              <div class="form-group">
                  <input type="text" class="form-control"  name="pseudo" placeholder="pseudo">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control"  name="mdp" placeholder="mot de passe">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
      </div>

    </div>
    <!-- /.row -->

  </div>


