<div class="row">
<div class="col-lg-6">
  <section class="panel">
    <header class="panel-heading">
      <h1>Book Appointment</h1>
      <a href="?c=services">Go back</a>

    </header>
    <div class="panel-body">
      <form action="?c=temporal&a=Buy" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $MODEL->getId() ?>" />
        <input type="hidden" name="code" id="code" value="<?= $MODEL->getCode() ?>" />
        <input type="hidden" name="speciality" id="speciality" value="<?= $MODEL->getSpeciality() ?>" />
        <input type="hidden" name="doctor" id="doctor" value="<?= $MODEL->getDoctor() ?>" />
        <input type="hidden" name="price" id="price" value="<?= $MODEL->getPrice() ?>" />
        <input type="hidden" name="userId" id="userId" value="<?=Security::GetLoggedUser()->getId()?>">
        <dl class="dl-horizontal">
          <dt>Code</dt><dd><?= $MODEL->getCode() ?></dd>
          <dt>Speciality</dt><dd><?= $MODEL->getSpeciality() ?></dd>
          <dt>Doctor</dt><dd><?= $MODEL->getDoctor() ?></dd>
          <dt>Price</dt><dd><?= $MODEL->getPrice() ?></dd>
          <dt>Quantity</dt><dd><?= $MODEL->getQuantity() ?></dd>
          <dt>Date & Time</dt><dd><input type="date" class="form-control" id="date" name="date"><input type="Time" class="form-control" id="time" name="time"></dd>
        </dl>
        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-cart-plus"></i>Add to Cart</button>
      </form>
    </div>
  </section>
</div>
</div>