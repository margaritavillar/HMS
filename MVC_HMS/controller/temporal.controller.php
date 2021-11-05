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