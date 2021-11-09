 <br> <br> <br> <br> 
      
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>
          <h1>My Account</h1>
           <a href="?c=users" type="submit" class="w3-button w3-teal">Go Back</a>

      </header>
        <?php } else { ?>
          <h1>My Account</h1>
        <?php } ?>
      </header>
        <br>
      <div class="panel-body">
        <form action="?c=users&a=Edit" method="POST" autocomplete="off">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="username">User</label>
              <input value="<?= $MODEL->getUsername() ?>" type="text" class="form-control" id="username" name="username" placeholder="Usuario" <?=(Security::GetLoggedUser())->getRole() == 'CLIENT' ? 'disabled="disabled"' : ''?>>
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
           
          </div>
        </form>
      </div>
    </section>
  </div>
</div>