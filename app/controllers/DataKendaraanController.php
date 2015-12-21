<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class DataKendaraanController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_kendaraan
     */
    public function searchAction()
    {
        //$this->view->disable();
       // $this->response->setContentType('application/json');
        /*tmbh ispost*/
        $nama = $this->request->getPost("plat_nomor");
        If($nama<>""){
            $data = DataKendaraan::find( array(
        array(
            "plat_nomor" => $nama

        )
        )); 
        }
        else {
        $data = DataKendaraan::find();
        }
       
        //echo $data->jenis_kendaraan;
        //echo $data->nomor_stnk;
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
     * Edits a data_kendaraan
     *
     * @param string $_id
     */
    public function editAction($_id)
    {

        if (!$this->request->isPost()) {

            $data_kendaraan = DataKendaraan::findFirst(array(
            array(
            "plat_nomor" => $_id
            )
            ));
            if (!$data_kendaraan) {
                $this->flash->error("data_kendaraan was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_kendaraan",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_kendaraan->_id;

            //$this->tag->setDefault("_id", $data_kendaraan->_id);
            $this->tag->setDefault("plat_nomor", $data_kendaraan->plat_nomor);
            $this->tag->setDefault("jenis_kendaraan", $data_kendaraan->jenis_kendaraan);
            $this->tag->setDefault("nomor_stnk", $data_kendaraan->nomor_stnk);
            $this->tag->setDefault("kapasitas", $data_kendaraan->kapasitas);
                       
        }
    }

    /**
     * Creates a new data_kendaraan
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "index"
            ));
        }

        $data_kendaraan = new DataKendaraan();

        $data_kendaraan->plat_nomor = $this->request->getPost("plat_nomor");
        $data_kendaraan->jenis_kendaraan = $this->request->getPost("jenis_kendaraan");
        $data_kendaraan->nomor_stnk = $this->request->getPost("nomor_stnk");
        $data_kendaraan->kapasitas = $this->request->getPost("kapasitas");
              

        if (!$data_kendaraan->save()) {
            foreach ($data_kendaraan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "new"
            ));
        }

        $this->flash->success("data_kendaraan was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_kendaraan",
            "action" => "index"
        ));

    }

    /**
     * Saves a data_kendaraan edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "index"
            ));
        }

        $_id = $this->request->getPost("plat_nomor");


          $data_kendaraan = DataKendaraan::findFirst(array(
        array(
            "plat_nomor" => $_id

        )
        ));
        if (!$data_kendaraan) {
            $this->flash->error("data_kendaraan does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "index"
            ));
        }

        $data_kendaraan->plat_nomor = $this->request->getPost("plat_nomor");
        $data_kendaraan->jenis_kendaraan = $this->request->getPost("jenis_kendaraan");
        $data_kendaraan->nomor_stnk = $this->request->getPost("nomor_stnk");
        $data_kendaraan->kapasitas = $this->request->getPost("kapasitas");
        

        if (!$data_kendaraan->save()) {

            foreach ($data_kendaraan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "edit",
                "params" => array($data_kendaraan->_id)
            ));
        }

        $this->flash->success("data_kendaraan was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_kendaraan",
            "action" => "index"
        ));

    }

    /**
     * Deletes a data_kendaraan
     *
     * @param string $_id
     */
    public function deleteAction($_id)
    {

      
        $data_kendaraan = DataKendaraan::findFirst(array(
        array(
            "plat_nomor" => $_id

        )
        ));
        if (!$data_kendaraan) {
            $this->flash->error("data_kendaraan was not found");

            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "index"
            ));
        }

        if (!$data_kendaraan->delete()) {

            foreach ($data_kendaraan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_kendaraan",
                "action" => "search"
            ));
        }

        $this->flash->success("data_kendaraan was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_kendaraan",
            "action" => "index"
        ));
    }

}
