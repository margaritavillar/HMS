<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Create Service</h1>
        <a href="?c=services">Go back</a>
      </header>
      <div class="panel-body">
        <form action="?c=services&a=Create" method="POST" autocomplete="off" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="code">Code</label>
              <input type="text" class="form-control" id="code" name="code" placeholder="Código">
            </div>

            <div class="form-group col-md-4">
              <label for="speciality">Specialty</label>
              <!-- <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Doctor Speciality"> -->

              <select id="speciality" name="speciality" class="form-control" id="speciality">
                <?=service::GetAllSpecialties()?>;
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="doctor">Doctor</label>
              <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Doctor name">
<!-- 
              <select class="form-control" id="doctor" name="doctor">
                
                
              </select> -->
              
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i>Create Service</button>
            </div>
          </div>
        </form>
      </div>
    </section>

<!-- <?php //var_dump($MODEL); ?> -->

  </div>
</div>