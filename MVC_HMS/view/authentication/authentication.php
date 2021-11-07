<div class="container">
  <div class="row"><br><br></div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-4">
      <div class="account-wall">
        
        <form class="form-signin" action="?c=authentication&a=Login" method="POST" >
          <input type="text" class="form-control" placeholder="Username" name="username" required autofocus />
          <input type="password" class="form-control" placeholder="Password" name="password" required />
          <button class="btn btn-lg btn-secondary btn-block" type="submit">Login</button>
          <?php if ($MODEL != null) { ?>
            <?=$MODEL->getMessage()?>
          <?php } ?>
          
        </form>
      </div>
    </div>
  </div>
</div>

  <br><br>

<div>
  <a href="?c=authentication&a=Register">Register</a>
</div>