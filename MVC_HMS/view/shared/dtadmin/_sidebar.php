  <div class="row">

  	<ul class="sidebar-nav">


    <li class="sidebar-brand"></li>
    <?php if (Security::UserIsLoggedIn()) { ?>
    <br><br>

    <li class="sidebar-brand">
      <h5>
        Welcome, <?=(Security::GetLoggedUser() != null ? Security::GetLoggedUser()->getName(): 'Guest')?>!
      </h5>
    </li>

      <li>
        <a href="?c=home" class="<?=(($PAGE == 'Home') ? 'active' : '')?>">
          <i class="fa fa-dashboard" aria-hidden="true"></i> &nbsp;Home
        </a>
      </li>
      <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>

        <li>
          <a href="?c=users&a=Details&id=<?=(Security::GetLoggedUser())->getId()?>" class="<?=(($PAGE == 'Users') ? 'active' : '')?>">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;My Account
          </a>
        </li>

        <li>
          <a href="?c=users" class="<?=(($PAGE == 'Users') ? 'active' : '')?>">
            <i class="fa fa-building" aria-hidden="true"></i> &nbsp;Users
          </a>
        </li>
        <li>
          <a href="?c=temporal&role=<?=(Security::GetLoggedUser())->getRole()?>" class="<?=(($PAGE == 'Temporals') ? 'active' : '')?>">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;List of Appointments
          </a>
        </li>

      <?php // } elseif ((Security::GetLoggedUser())->getRole() ='CLIENT') { ?>
<!--
      	<li>
          <a href="?c=users&a=Edit&id=<?=(Security::GetLoggedUser())->getId()?>" class="<?=(($PAGE == 'Users') ? 'active' : '')?>">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;My Account
          </a>
        </li>
        
        <li>
          <a href="?c=sales" class="<?=(($PAGE == 'Sales') ? 'active' : '')?>">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;My Appointments History
          </a>
        </li>
        <li>
          <a href="?c=sales" class="<?=(($PAGE == 'Sales') ? 'active' : '')?>">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;My Prescriptions
          </a>
        </li>
-->
      <?php } else { ?>

        <li>
          <a href="?c=users&a=MyAccount&id=<?=(Security::GetLoggedUser())->getId()?>" class="<?=(($PAGE == 'Users') ? 'active' : '')?>">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;My Account
          </a>
        </li>
        <li>
          <a href="?c=temporal&role=<?=(Security::GetLoggedUser())->getRole()?>&id=<?=(Security::GetLoggedUser())->getId()?> " class="<?=(($PAGE == 'Temporals') ? 'active' : '')?>">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;List of Appointments
          </a>
        </li>
        <li>
          <a href="?c=sales" class="<?=(($PAGE == 'Sales') ? 'active' : '')?>">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;List of Prescriptions
          </a>
        </li>
      <?php } ?>

      <li>
        <a href="?c=services" class="<?=(($PAGE == 'Services') ? 'active' : '')?>">
          <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;Services
        </a>
      </li>
    <?php } ?>
  </ul>
</div>



<!--

  <div class="sidebar-nav">

    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
      <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>

     </div>
     -->