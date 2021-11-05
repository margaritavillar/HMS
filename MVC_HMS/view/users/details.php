<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>User Information</h1>
        <a href="?c=users">Go Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Username</dt><dd><?= $MODEL->getUsername() ?></dd>
          <dt>Email</dt><dd><?= $MODEL->getEmail() ?></dd>
          <dt>Firstname</dt><dd><?= $MODEL->getName() ?></dd>
          <dt>Lastname</dt><dd><?= $MODEL->getLastname() ?></dd>
          <dt>User ID</dt><dd><?= $MODEL->getIdCard() ?></dd>
          <dt>Phone</dt><dd><?= $MODEL->getPhone() ?></dd>
          <dt>Role</dt><dd><?= $MODEL->getRole() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>