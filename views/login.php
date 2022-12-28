<?php 
    if(isset($_POST['submit'])){
        $loginUser = new admincontroller();
        $loginUser->admin();
    }
?>
<?php require './views/includes/header.php'; ?>

<div class="container" style="margin-top: 10%; margin-bottom:10%;">
    <div class="row my-4">
        <div class="col-md-1- mx-auto">
            <?php include('./views/includes/alerts.php');?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Connexion</h3>
                </div>
                <div class="card-body bg-light">
                      <form method="post" class="mr-1">
                          <div class="form-group">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="text" name="username" placeholder="Pseudo" class="form-control">
                          </div>
                          <div class="form-group">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                          </div>
                          <button name="submit" class="btn btn-sm btn-primary">Connexion</button>
                      </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL;?>register" class="btn btn-link my-auto">Inscription</a>
                </div>
            </div>
        </div>
    </div>
</div>