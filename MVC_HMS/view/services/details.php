<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Book an Appointment</h1>
        <a href="?c=services">Go back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Code</dt><dd><?= $MODEL->getCode() ?></dd>
          <dt>Speciality</dt><dd><?= $MODEL->getSpeciality() ?></dd>
          <dt>Doctor</dt><dd><?= $MODEL->getDoctor() ?></dd>
          <dt>Price</dt><dd><?= $MODEL->getPrice() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>