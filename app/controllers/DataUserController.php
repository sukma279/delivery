<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class DataUserController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_user
     */
    public function searchAction()
    {
        $nama = $this->request->getPost("username");
        If($nama<>""){
            $data = DataUser::find( array(
        array(
            "username" => $nama

        )
        )); 
        }
        else {
        $data = DataUser::find();
        }
       
          $this->view->item = $data;
        }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a data_user
     *
     * @param string $_id
     */
    public function editAction($_id)
    {

        if (!$this->request->isPost()) {

            $data_user = DataUser::findFirst(array(
            array(
            "username" => $_id
            )
            ));
            if (!$data_user) {
                $this->flash->error("data_user was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_user",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_user->_id;

            //$this->tag->setDefault("_id", $data_user->_id);
            $this->tag->setDefault("email", $data_user->email);
            $this->tag->setDefault("username", $data_user->username);
            $this->tag->setDefault("password", $data_user->password);
            $this->tag->setDefault("level_user", $data_user->level_user);
                        
        }
    }

    /**
     * Creates a new data_user
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "index"
            ));
        }

        $data_user = new DataUser();

        $data_user->email = $this->request->getPost("email");
        $data_user->username = $this->request->getPost("username");
        $data_user->password = $this->request->getPost("password");
        $data_user->level_user = $this->request->getPost("level_user");
                

        if (!$data_user->save()) {
            foreach ($data_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "new"
            ));
        }

        $this->flash->success("data_user was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_user",
            "action" => "index"
        ));

    }

    /**
     * Saves a data_user edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "index"
            ));
        }

        $_id = $this->request->getPost("username");


          $data_user = DataUser::findFirst(array(
        array(
            "username" => $_id

        )
        ));
        if (!$data_user) {
            $this->flash->error("data_user does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "index"
            ));
        }

        $data_user->email = $this->request->getPost("email");
        $data_user->username = $this->request->getPost("username");
        $data_user->password = $this->request->getPost("password");
        $data_user->level_user = $this->request->getPost("level_user");
                

        if (!$data_user->save()) {

            foreach ($data_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "edit",
                "params" => array($data_user->_id)
            ));
        }

        $this->flash->success("data_user was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_user",
            "action" => "index"
        ));

    }

    /**
     * Deletes a data_user
     *
     * @param string $_id
     */
    public function deleteAction($_id)
    {

      
        $data_user = DataUser::findFirst(array(
        array(
            "username" => $_id

        )
        ));
        if (!$data_user) {
            $this->flash->error("data_user was not found");

            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "index"
            ));
        }

        if (!$data_user->delete()) {

            foreach ($data_user->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_user",
                "action" => "search"
            ));
        }

        $this->flash->success("data_user was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_user",
            "action" => "index"
        ));
    }

}
