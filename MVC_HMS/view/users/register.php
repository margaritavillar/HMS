 <br> <br> <br> <br><div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Register</h1>
      </header>
      <div class="panel-body">
        <form action="?c=users&a=RegisterPatient" method="POST" autocomplete="off">
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
            <div class="form-group col-md-2">
              <label for="role">Role</label>
              <input type="hidded" class="form-control" id="role" name="role" value="CLIENT">

            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Register</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>