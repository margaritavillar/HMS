<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Delete Service</h1>
        <a href="?c=services">Go back</a>
      </header>
      <div class="panel-body">
        <form action="?c=services&a=Delete" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $MODEL->getId() ?>" />
          <dl class="dl-horizontal">
            <dt>Code</dt><dd><?= $MODEL->getCode() ?></dd>
            <dt>Speciality</dt><dd><?= $MODEL->getSpeciality() ?></dd>
            <dt>Doctor</dt><dd><?= $MODEL->getDoctor() ?></dd>
            <dt>Price</dt><dd><?= $MODEL->getPrice() ?></dd>
          </dl>
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete Service</button>
        </form>
      </div>
    </section>
  </div>
</div>