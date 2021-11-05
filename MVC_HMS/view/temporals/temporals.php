<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>
          <h1>Appoinments History</h1>
        <?php } else { ?>
          <h1>My Appointments</h1>

          <h3><?php echo (Security::GetLoggedUser())->getId()?></h3>

      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
              <th>Code</th>
              <th>Speciality</th>
              <th>Doctor</th>
              <th>User ID</th>
              <th>Date</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($MODEL as $temporal) { 
            ?>
              <tr>
                <td><?=$temporal->getCode()?></td>
                <td><?=$temporal->getSpeciality()?></td>
                <td><?=$temporal->getDoctor()?></td>
                <td><?=$temporal->getUserId()?></td>
                <td><?=$temporal->getDate()?></td>
                <td><?=$temporal->getTime()?></td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    <?php } ?>
    </section>
  </div>
</div>