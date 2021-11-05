<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Delete User</h1>
        <a href="?c=users">Go Back</a>
      </header>
      <div class="panel-body">
        <form action="?c=users&a=Delete" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $MODEL->getId() ?>" />
          <dl class="dl-horizontal">
            <dt>Username</dt><dd><?= $MODEL->getUsername() ?></dd>
            <dt>Email</dt><dd><?= $MODEL->getEmail() ?></dd>
            <dt>Firstname</dt><dd><?= $MODEL->getName() ?></dd>
            <dt>Lastname</dt><dd><?= $MODEL->getLastname() ?></dd>
            <dt>User ID</dt><dd><?= $MODEL->getIdCard() ?></dd>
            <dt>Phone</dt><dd><?= $MODEL->getPhone() ?></dd>
            <dt>Role</dt><dd><?= $MODEL->getRole() ?></dd>
          </dl>
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete User</button>
        </form>
      </div>
    </section>
  </div>
</div>