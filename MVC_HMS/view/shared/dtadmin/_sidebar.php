  
 
  <div class="row">

    <ul class="sidebar-nav">


    <li class="sidebar-brand"></li>
    <?php if (Security::UserIsLoggedIn()) { ?>
    <br><br>

    <li class="sidebar-brand" style="text-align: center">
      <h3>
        Welcome, <?=(Security::GetLoggedUser() != null ? Security::GetLoggedUser()->getName(): 'Guest')?>!
      </h3>
<br><br>
      <div class="row">
  <div class="col-md-5" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
    </li>

      

         <a class="list-group-item list-group-item-action active" href="?c=home" class="<?=(($PAGE == 'Home') ? 'active' : '')?>" role="tab"   aria-controls="home">
        
          <i class="fa fa-dashboard" aria-hidden="true"></i> &nbsp;Home
        </a>
       
      <?php if ((Security::GetLoggedUser())->getRole() == 'ADMIN') { ?>

        

             <a class="list-group-item list-group-item-action "   href="?c=users&a=Details&id=<?=(Security::GetLoggedUser())->getId()?>" class="<?=(($PAGE == 'Users') ? 'active' : '')?>" role="tab"   aria-controls="home">
         
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;My Account
          </a>
     
 
             <a class="list-group-item list-group-item-action"  href="?c=users" class="<?=(($PAGE == 'Users') ? 'active' : '')?>" role="tab"   aria-controls="home">
         
            <i class="fa fa-building" aria-hidden="true"></i> &nbsp;Users
          </a>
        

             <a class="list-group-item list-group-item-action" href="?c=booking&role=<?=(Security::GetLoggedUser())->getRole()?>" class="<?=(($PAGE == 'Bookings') ? 'active' : '')?>"  aria-controls="home">
         
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
 <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  

 
    <div class="row">
  <div class="col-md-7" style="max-width:66%; ">
    <div class="list-group" id="list-tab" role="tablist">
   
        
          <a class="list-group-item list-group-item-action" href="?c=users&a=MyAccount&id=<?=(Security::GetLoggedUser())->getId()?>" class="<?=(($PAGE == 'Users') ? 'active' : '')?>" role="tab"   aria-controls="home" style="width:200px">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;My Account
          </a>
         
        
          <a class="list-group-item list-group-item-action" href="?c=booking&role=<?=(Security::GetLoggedUser())->getRole()?>&id=<?=(Security::GetLoggedUser())->getId()?> " class="<?=(($PAGE == 'Bookings') ? 'active' : '')?>"   role="tab"  aria-controls="home" style="width:200px">
            <i class="fa fa-history"    aria-hidden="true"></i>&nbsp;List of Appointments
          </a>
       
        
          <a class="list-group-item list-group-item-action" href="?c=sales" class="<?=(($PAGE == 'Sales') ? 'active' : '')?>" role="tab"   aria-controls="home" style="width:200px">
            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;List of Prescriptions
          </a>
        
      <?php } ?>

       
        <a class="list-group-item list-group-item-action" href="?c=services" class="<?=(($PAGE == 'Services') ? 'active' : '')?>"  role="tab" data-toggle="list" aria-controls="home" style="width:200px">
          <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;Services
        </a>
       
    <?php } ?>
  </ul>
 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



  <br>
<!--

  <div class="sidebar-nav">

    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
      <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>

     </div>
     -->


       <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>