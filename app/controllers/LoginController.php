<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

		
    }

    private function _registerSession(User $user)
    {
  $this->session->set('auth', array(
            'isLog' => 'Y',
            'id' => $user->_id,
            'username' => $user->username
        ));
    }
  
 public function prosesloginAction()
 {
        if ($this->request->isPost()) {
   $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $tbluser = User::findFirst(
            	array(
       				 array(
           				 'username' => '$username'
       				 )
   				 ));
   if ($tbluser)
   {
    if($password==$tbluser->password)
    {
     $this->_registerSession($tbluser);
     $this->response->redirect('home');
     }
   }
   echo "Username atau password salah";
   return $this->dispatcher->forward(array("action" => "index"));
  }
 }
  
 public function logoutAction()
 {
  $this->session->destroy();
  echo "Session sudah di destroy";
 }
}

