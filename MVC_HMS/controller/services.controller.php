<?php
class ServicesController extends BaseController {
    
    public function __CONSTRUCT (){}
    
    public function Index () {
        $model = Service::GetAllServices();
        parent::RenderPage(
            'Services', 
            'view/shared/dtadmin/layout.php', 
            'view/services/services.php',
            $model
        );
    }
    
    public function Edit () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $model = new Service(
                $_REQUEST['code'], 
                $_REQUEST['speciality'],
                $_REQUEST['doctor'],
                $_REQUEST['price'],
                $_REQUEST['quantity'],
                $_REQUEST['id']
            );
            $model->Edit();
    
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = (int)$_REQUEST['id'];
            $model = Service::GetServiceById($id);
            parent::RenderPage(
                'Services',
                'view/shared/dtadmin/layout.php', 
                'view/services/edit.php',
                $model
            );
        }
    }


    public function Create () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $model = new Service(
                $_REQUEST['code'], 
                $_REQUEST['speciality'],
                $_REQUEST['doctor'],
                $_REQUEST['price'],
                $_REQUEST['quantity']
            );

            $model->Create();
    
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            parent::RenderPage(
                'Services',
                'view/shared/dtadmin/layout.php', 
                'view/services/create.php'
            );
        }
    }

    public function Delete () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int)$_REQUEST['id'];
            $model = Service::GetServiceById($id);
            $model->Delete();
            parent::RedirectToController('services');
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = (int)$_REQUEST['id'];
            $model = Service::GetServiceById($id);
            parent::RenderPage(
                'Services',
                'view/shared/dtadmin/layout.php', 
                'view/services/delete.php',
                $model
            );
        }
    }

    public function Details () {
        $id = (int)$_REQUEST['id'];
        $model = Service::GetServiceById($id);
        parent::RenderPage(
            'Services',
            'view/shared/dtadmin/layout.php', 
            'view/services/details.php',
            $model
        );
    }


    public function Buy () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int)$_REQUEST['id'];
            $date = $_REQUEST['date'];
            $time = $_REQUEST['time'];
            $service = Service::GetServiceById($id);
            //$service1 = array_push($service, $date, $time);
            
            $cart = null;
            if (ShoppingCartSession::ShoppingCartExists()) {
                $cart = ShoppingCartSession::GetShoppingCart();
                array_push($cart->services, $service);
            } else {
                $cart = new ShoppingCart();
                array_push($cart->services, $service);
            }
            ShoppingCartSession::StoreShoppingCartInSession($cart);
            parent::RedirectToController('services');


        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = (int)$_REQUEST['id'];
            $model = Service::GetServiceById($id);
            parent::RenderPage(
                'Services',
                'view/shared/dtadmin/layout.php', 
                'view/services/buy.php',
                $model
            );
        }
    }



}

?>