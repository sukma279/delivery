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
        //$this->view->disable();
       // $this->response->setContentType('application/json');
        /*tmbh ispost*/
        $nama = $this->request->getPost("nama_pemesan");
        If($nama<>""){
            $data = DataCustomer::find( array(
        array(
            "nama_pemesan" => $nama

        )
        )); 
        }
        else {
        $data = DataCustomer::find();
        }
       
        //echo $data->nama_pemesan;
        //echo $data->alamat;
        #$echo $data->no_tlp;
        //echo json_encode($data);
        #print_r($data)
         $this->view->item = $data;
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

            $data_customer = DataCustomer::findFirst(array(
            array(
            "kode_pemesan" => $_id
            )
            ));
            if (!$data_customer) {
                $this->flash->error("data_customer was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_customer",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_customer->_id;

            //$this->tag->setDefault("_id", $data_customer->_id);
            $this->tag->setDefault("kode_pemesan", $data_customer->kode_pemesan);
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

        $data_customer->kode_pemesan = $this->request->getPost("kode_pemesan");
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

        $_id = $this->request->getPost("kode_pemesan");


          $data_customer = DataCustomer::findFirst(array(
        array(
            "kode_pemesan" => $_id

        )
        ));
        if (!$data_customer) {
            $this->flash->error("data_customer does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_customer",
                "action" => "index"
            ));
        }

        $data_customer->kode_pemesan = $this->request->getPost("kode_pemesan");
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

      
        $data_customer = DataCustomer::findFirst(array(
        array(
            "kode_pemesan" => $_id

        )
        ));
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

    public function createpdfAction()
    {
        $getdata=DataCustomer::find();
        $this->view->datas=$getdata;
 
    }

}
