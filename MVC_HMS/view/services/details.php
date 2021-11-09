 <br> <br> <br> <br><div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Book an Appointment</h1>
        <a href="?c=services"type="submit" class="w3-button w3-teal">Go back</a>

      </header>
        <br>
      <div class="panel-body">
        <form action="?c=services&a=Edit" method="POST" autocomplete="off" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="code">Code</label>
              <input value="<?= $MODEL->getCode() ?>" type="text" class="form-control" id="code" name="code" placeholder="Code">
            </div>
            <div class="form-group col-md-4">
              <label for="speciality">Speciality</label>
              <input value="<?= $MODEL->getSpeciality() ?>" type="text" class="form-control" id="speciality" name="speciality" placeholder="Speciality">
            </div>
            <div class="form-group col-md-4">
              <label for="doctor">Doctor</label>
              <input value="<?= $MODEL->getDoctor() ?>" type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor Name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input value="<?= $MODEL->getPrice() ?>" type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
             
          </div>

          <div class="form-row">
            <div class="col-md-6">
              
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>