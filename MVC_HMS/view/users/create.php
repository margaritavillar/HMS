 <br> <br> <br> <br><div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Create User</h1>
        <a href="?c=users" class="w3-button w3-teal">Go Back</a>
      </header>
        <br>
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
            <div class="form-group col-md-2">
              <label for="role">Rol</label>
              <select name="role" id="role" class="form-control">
                <option value="CLIENT" selected="selected">Client</option>
                <option value="DOCTOR" selected="selected">Doctor</option>
                <option value="NURSE" selected="selected">Nurse</option>
                <option value="ADMIN">Manager</option>
              </select>
              
            </div>
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