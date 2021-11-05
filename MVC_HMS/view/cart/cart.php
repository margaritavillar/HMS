<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Booking Appointment</h1>
        <a href="?c=cart&a=Checkout" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Booking</a>
        <a href="?c=cart&a=Empty" class="btn btn-danger"><i class="fa fa-trash"></i>Clean</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>Code</th>
              <th>Speciality</th>
              <th>Doctor</th>
              <th>Date</th>
              <th>Time</th>
              <th>Price</th>
              <th class="no-sort">Actions</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
              foreach ($MODEL as $service) { 
            ?>
              <tr>
                <td><?=$service->getCode()?></td>
                <td><?=$service->getSpeciality()?></td>
                <td><?=$service->getDoctor()?></td>
                <td><?=$service->getDoctor()?></td>
                <td><?=$service->getPrice()?></td>
                <td><?=$service->getPrice()?></td>
                <td><a href="?c=cart&a=RemoveService&id=<?=$service->getCartUniqueId()?>" class="btn btn-danger btn-sm fa fa-minus-circle">Remove</a></td>
              </tr>
            <?php 
              }
            ?>

          </tbody>
          <tfoot>
            <tr>
              <th style="text-align:right;" colspan="3">Total:</th>
              <td><?= array_sum(array_map(function ($element) { return $element->getPrice(); }, $MODEL));?></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </div>
</div>