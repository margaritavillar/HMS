<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

      <?php if (Security::GetLoggedUser() != null && ShoppingCartSession::ShoppingCartExists()) { 
                $cart = ShoppingCartSession::GetShoppingCart(); ?>
        <li class="nav-item">
            <a href="?c=cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              &nbsp;
              <?=count($cart->services)?>
            </a>
        </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="?c=authentication&a=Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>

      </ul>

    </div>
  </div>

</nav>
