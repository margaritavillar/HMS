<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Users</h1>
        <a href="?c=users&a=Create" class="btn btn-success">Create</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Role</th>
              <th class="no-sort">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($MODEL as $user) { 
            ?>
              <tr>
                <td><?=$user->getUsername()?></td>
                <td><?=$user->getName()?></td>
                <td><?=$user->getLastname()?></td>
                <td><?=$user->getPhone()?></td>
                <td><?=$user->getEmail()?></td>
                <td><?=$user->getRole()?></td>
                <td id="userButtons-cell">
                    <a class="fa fa-eye btn btn-info btn-sm" href="?c=users&a=Details&id=<?=$user->getId()?>">Details</a>
                    <a class="fa fa-pencil btn btn-warning btn-sm" href="?c=users&a=Edit&id=<?=$user->getId()?>">Edit</a>
                    <a class="fa fa-trash btn btn-danger btn-sm" href="?c=users&a=Delete&id=<?=$user->getId()?>">Delete</a>   
                </td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>
<!-- <script type="text/javascript">
function getUserDetails (element) {
  var uri = $(element).data('href')
  $.ajax({
    url: uri,
    method: 'POST',
    success: function (result) {
      alert('Nombre: ' + result.username + ', Name: ' + result.name + ', Last name: ' + result.lastName + ', Phone: ' + result.phone + ', Email: ' + result.email)
    }
  })
}
function deleteUser (element) {
  var uri = $(element).data('href')
  if (confirm('¿Realmente desea borrar este usuario>')) {
    $.ajax({
      url: uri,
      method: 'POST',
      success: function (result) {
        alert('Usuario borrado correctamente')
        location.reload()
      }
    })
  }
}
</script> -->





<!-- <button onclick="deleteUser(this)" class="btn btn-danger btn-sm" data-href="?c=users&a=DeleteJson&id=<?=$user->getId()?>"><i class="fa fa-trash"></i> Borrar</button> -->

<!-- <button onclick="getUserDetails(this)" class="btn btn-info btn-sm" data-href="?c=users&a=DetailsJson&id=<?=$user->getId()?>"><i class="fa fa-eye"></i> Detalles</button> -->