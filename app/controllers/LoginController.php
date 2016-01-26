<?php
use Phalcon\Session\Adapter\Files as Session;
 $di->setShared('session', function () {
        $session = new Session();
        $session->start();
        return $session;
        });
class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

		
    }

    
  
 public function prosesloginAction()
 {
       

        if ($this->request->isPost()) {
             $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $tbluser = User::findFirst(
            	
       				 array(
           				 'username' => '$username',
                   'password' => '$password'
       				 )
   				 );
   if ($tbluser != false)
   {
    if($password==$tbluser->password)
    {
     $this->session->set("user_name",$tbluser->username);
     $this->response->redirect('index');
    }
   }
   else {
   echo "Username atau password salah";
   return $this->dispatcher->forward(array("action" => "login"));}
  }
 }
  
 public function logoutAction()
 {
  $this->session->destroy();
   $this->response->redirect('index');
 }
}

