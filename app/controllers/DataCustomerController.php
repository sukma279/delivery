<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class DataCustomerController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_customer
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DataCustomer", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "_id";

        $data_customer = DataCustomer::find($parameters);
        if (count($data_customer) == 0) {
            $this->flash->notice("The search did not find any data_customer");

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $data_customer,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a data_customer
     *
     * @param string $_id
     */
    public function editAction($_id)
    {

        if (!$this->request->isPost()) {

            $data_customer = DataCustomer::findFirstBy_id($_id);
            if (!$data_customer) {
                $this->flash->error("data_customer was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_customer",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_customer->_id;

            $this->tag->setDefault("_id", $data_customer->_id);
            $this->tag->setDefault("nama_pemesan", $data_customer->nama_pemesan);
            $this->tag->setDefault("alamat", $data_customer->alamat);
            $this->tag->setDefault("kabupaten", $data_customer->kabupaten);
            $this->tag->setDefault("no_tlp", $data_customer->no_tlp);
            
        }
    }

    /**
     * Creates a new data_customer
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        $data_customer = new DataCustomer();

        $data_customer->nama_pemesan = $this->request->getPost("nama_pemesan");
        $data_customer->alamat = $this->request->getPost("alamat");
        $data_customer->kabupaten = $this->request->getPost("kabupaten");
        $data_customer->no_tlp = $this->request->getPost("no_tlp");
        

        if (!$data_customer->save()) {
            foreach ($data_customer->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "new"
            ));
        }

        $this->flash->success("data_customer was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_customer",
            "action" => "index"
        ));

    }

    /**
     * Saves a data_customer edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        $_id = $this->request->getPost("_id");

        $data_customer = DataCustomer::findFirstBy_id($_id);
        if (!$data_customer) {
            $this->flash->error("data_customer does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        $data_customer->nama_pemesan = $this->request->getPost("nama_pemesan");
        $data_customer->alamat = $this->request->getPost("alamat");
        $data_customer->kabupaten = $this->request->getPost("kabupaten");
        $data_customer->no_tlp = $this->request->getPost("no_tlp");
        

        if (!$data_customer->save()) {

            foreach ($data_customer->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "edit",
                "params" => array($data_customer->_id)
            ));
        }

        $this->flash->success("data_customer was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_customer",
            "action" => "index"
        ));

    }

    /**
     * Deletes a data_customer
     *
     * @param string $_id
     */
    public function deleteAction($_id)
    {

        $data_customer = DataCustomer::findFirstBy_id($_id);
        if (!$data_customer) {
            $this->flash->error("data_customer was not found");

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        if (!$data_customer->delete()) {

            foreach ($data_customer->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "search"
            ));
        }

        $this->flash->success("data_customer was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_customer",
            "action" => "index"
        ));
    }

}
