<?php
//Booking appointment

class CartController extends BaseController {
    
    public function __CONSTRUCT (){}
    
    public function Index () {
        $cart = ShoppingCartSession::GetShoppingCart();
        $model = $cart->services;
        parent::RenderPage(
            'Cart', 
            'view/shared/dtadmin/layout.php', 
            'view/cart/cart.php',
            $model
        );
    }

    public function Empty () {
        ShoppingCartSession::RemoveShoppingCartFromSession();
        parent::RedirectToController('services');
    }

    public function RemoveService () {
        $id = $_REQUEST['id'];
        $cart = ShoppingCartSession::GetShoppingCart();
        $filteredServices = array_filter($cart->services, function ($element) use ($id) {
            return $element->getCartUniqueId() != $id;
        });
        if (count($filteredServices) > 0) {
            $cart->services = $filteredServices;
            ShoppingCartSession::StoreShoppingCartInSession($cart);
            parent::RedirectToController('cart');
        } else {
            ShoppingCartSession::RemoveShoppingCartFromSession();
            parent::RedirectToController('services');
        }
    }
    
    public function Checkout () {
        $cart = ShoppingCartSession::GetShoppingCart();
        $model = $cart->services;
        parent::RenderPage(
            'Cart', 
            'view/shared/dtadmin/layout.php', 
            'view/cart/checkout.php',
            $model
        );
    }

    public function ConfirmCheckout () {
        if (ShoppingCartSession::ShoppingCartExists()) {
            $cart = ShoppingCartSession::GetShoppingCart();
            $cart->services;
            foreach ($cart->services as $service) {
                $user = Security::GetLoggedUser();
                $appointment = new Appointment(
                    $user->getId(),
                    $service->getId(),
                    $invoiceNumber = (Setting::GetLastInvoiceNumber() + 1),
                    $saleDate = (new DateTime())->format('Y-m-d H:i:s')
                );
                $appointment->Booking();
            }
            parent::RedirectToController('cart', 'Empty');  // Succesful, redirect to sale history
            
        } else {
            parent::RedirectToController('services');
        }
    }

}

?>