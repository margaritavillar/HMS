  
  <br> <br> <br> <br><div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        
          <h1>Delete Account</h1>
          <a href="?c=users" type="submit" class="w3-button w3-teal">Go Back</a>
       
          
      </header>   <br><div class="panel-body">
        <form action="?c=users&a=Delete" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $MODEL->getId() ?>" />
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="username">User</label>
              <input value="<?= $MODEL->getUsername() ?>" type="text" class="form-control" id="username" name="username" placeholder="Usuario"  >
            </div>
            <div class="form-group col-md-4">
              <label for="password">Password</label>
              <input value="<?= $MODEL->getPassword() ?>" type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input value="<?= $MODEL->getEmail() ?>" type="email" class="form-control" id="email" name="email" placeholder="micorreo@midominio.com">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Firstname</label>
              <input value="<?= $MODEL->getName() ?>" type="text" class="form-control" id="name" name="name" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Lastname</label>
              <input value="<?= $MODEL->getLastname() ?>" type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idCard">User ID</label>
              <input value="<?= $MODEL->getIdCard() ?>" type="text" class="form-control" id="idCard" name="idCard" placeholder="Cédula">
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Phone</label>
              <input value="<?= $MODEL->getPhone() ?>" type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono">
            </div>
            <div class="form-group col-md-2">
              <label for="role">Role</label>
               <input value="<?= $MODEL->getRole() ?>" type="text" class="form-control" id="role" name="role" placeholder="Teléfono">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete User</button>
            </div>
          </div>
        </form>
      </div>


 