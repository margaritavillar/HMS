<?php
class TemporalController extends BaseController {
    
    public function __CONSTRUCT (){}
    
    
    public function Index () {
        
        $userId = $_REQUEST['id'];
        //$userId = Security::GetLoggedUser()->getId();
        $model = Temporal::GetAppointmentByUser($userId);

        parent::RenderPage(
                'Temporals', 
                'view/shared/dtadmin/layout.php', 
                'view/temporals/temporals.php',
                $model
                );

        /*
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $role = $_REQUEST['role'];

                if ($role = 'DOCTOR')
                {     

                } 
                elseif ($role = 'CLIENT') 
                {
                    $userId = $_REQUEST['id'];
                    //$userId = Security::GetLoggedUser()->getId();
                    $model = Temporal::GetAppointmentByUser($userId);
                }
                else 
                {

                    $this->RedirectToHomeIfNotAdmin();
                    $model = Temporal::GetAllAppointments();
                }

                parent::RenderPage(
                'Temporals', 
                'view/shared/dtadmin/layout.php', 
                'view/temporals/temporals.php',
                $model
                );

            } 
            else{

                parent::RedirectToController('home');
            }
        */

    }


public function Buy () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $model = new Temporal(
                $code = $_REQUEST['code'],
                $speciality = $_REQUEST['speciality'],
                $doctor = $_REQUEST['doctor'],
                $price = $_REQUEST['price'],
                $userId = (int)$_REQUEST['userId'],
                $date = $_REQUEST['date'],
                $time = $_REQUEST['time']
            );

            $model->Create1();

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





/*
    public function MyAppointments () {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $role = $_REQUEST['role'];

        if ($role = 'DOCTOR') {
            

        } elseif ($role = 'CLIENT') {
        
            $userId = Security::GetLoggedUser()->getId();
            $model = Temporal::GetAppointmentByuser($userId);

            parent::RenderPage(
            'Temporals',
            'view/shared/dtadmin/layout.php', 
            'view/temporals/temporals.php',
            $model
        );

        } else {

            $this->RedirectToHomeIfNotAdmin();

            $model = Temporal::GetAllAppointments();

            parent::RenderPage(
            'Temporals',
            'view/shared/dtadmin/layout.php', 
            'view/temporals/temporals.php',
            $model
            );

        }
    
        }

    }

*/

}

?>