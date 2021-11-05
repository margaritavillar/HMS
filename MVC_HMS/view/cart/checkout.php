<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Confirmation Required</h1>
        <a href="?c=cart">Go back</a>
      </header>
      <div class="panel-body">
        <div class="alert alert-info">
          If you continue, you accept the next item purchase:
        </div>
        <ul>

          <?php foreach($MODEL as $service) { ?>
            <li>
              <b><?=$service->getSpeciality()?> - <?=$service->getDoctor()?>: </b><?=$service->getPrice()?>
            </li>
          <?php } ?>
        </ul>


        <div>
          <b>Total:</b> <?= array_sum(array_map(function ($element) { return $element->getPrice(); }, $MODEL));?>
        </div>
        
        <div class="m-top15">
          <form action="?c=cart&a=ConfirmCheckout" method="POST">
            <button type="submit" class="btn btn-block btn-lg btn-success"><i class="fa fa-shield"></i>Confirm purchase</button>
          </form> 

        </div>
    </section>
  </div>
</div>