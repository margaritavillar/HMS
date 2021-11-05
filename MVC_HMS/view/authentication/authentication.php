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

  <br><br>

  <div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Register as Client</h1>
      </header>
      <div class="panel-body">
        <form action="?c=users&a=Create" method="POST" autocomplete="off">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group col-md-4">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="micorreo@midominio.com">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Firstname</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="FirtsName">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Lastname</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="LastName">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idCard">User ID</label>
              <input type="text" class="form-control" id="idCard" name="idCard" placeholder="ID">
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Telephone">
            </div>
            <input type="hidden" name="role" id="role" value="CLIENT" />
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Create user</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>


</div>