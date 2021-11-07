<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Appointments Service</h1>
        
        <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>
          <a href="?c=services&a=Create" class="btn btn-success">Create</a>
        <?php } ?>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-dataTable">
          <thead>
            <tr>
              <th>Code</th>
              <th>Speciality</th>
              <th>Doctor</th>
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
                <td><?=$service->getPrice()?></td>
                
                <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>
                <td>
                    <a class="fa fa-eye btn btn-info btn-sm" href="?c=services&a=Details&id=<?=$service->getId()?>">Details</a>
                    <a class="fa fa-pencil btn btn-warning btn-sm" href="?c=services&a=Edit&id=<?=$service->getId()?>">Edit</a>
                    <a class="fa fa-trash btn btn-danger btn-sm" href="?c=services&a=Delete&id=<?=$service->getId()?>">Delete</a>
                  </td>
                  <?php } else { ?>
                  <td>
                    <a class="btn btn-primary btn-sm" href="?c=services&a=Buy&id=<?=$service->getId()?>"><i class="fa fa-cart-plus"></i>Book</a>
                  <?php } ?>
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