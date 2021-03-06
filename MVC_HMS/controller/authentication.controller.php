<?php

class AuthenticationController extends BaseController {
    
    public function __CONSTRUCT (){}
    
    public function Index () {
        parent::RenderPage(
            'Authentication', 
            'view/shared/login/layout.php', 
            'view/authentication/authentication.php'
        );
    }

    public function Login () {
        $model = new User($_REQUEST['username'], $_REQUEST['password']);
        $result = $model->Login();
        if ($result) {
            Security::CreateSessionForUser(User::GetUserById($result));
            parent::RedirectToController('home');
        } else {
            $model->setMessage('Your user or Password are incorrect');
            parent::RenderPage(
                'Authentication', 
                'view/shared/login/layout.php', 
                'view/authentication/authentication.php',
                $model
            );
        }
    }

    public function Logout () {
        Security::DeleteSession();
        parent::RedirectToController('Authentication');
    }



    public function Register () {

        parent::RenderPage(
            'Users', 
            'view/shared/dtadmin/layout.php', 
            'view/users/register.php'     
        );
    }



    
}

?>