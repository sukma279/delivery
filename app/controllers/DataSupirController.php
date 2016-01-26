<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class DataSupirController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_supir
     */
    public function searchAction()
    {
        $nama = $this->request->getPost("nama_supir");
        If($nama<>""){
            $data = DataSupir::find( array(
        array(
            "nama_supir" => $nama

        )
        )); 
        }
        else {
        $data = DataSupir::find();
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
     * Edits a data_supir
     *
     * @param string $_id
     */
    public function editAction($_id)
    {

        if (!$this->request->isPost()) {

            $data_supir = DataSupir::findFirst(array(
            array(
            "kode_supir" => $_id
            )
            ));
            if (!$data_supir) {
                $this->flash->error("data_supir was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_supir",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_supir->_id;

            //$this->tag->setDefault("_id", $data_supir->_id);
            $this->tag->setDefault("kode_supir", $data_supir->kode_supir);
            $this->tag->setDefault("nama_supir", $data_supir->nama_supir);
            $this->tag->setDefault("nomor_sim", $data_supir->nomor_sim);
            $this->tag->setDefault("alamat", $data_supir->alamat);
            $this->tag->setDefault("no_tlp", $data_supir->no_tlp);
            $this->tag->setDefault("jenis_kendaraan", $data_supir->jenis_kendaraan);
            $this->tag->setDefault("name", $data_supir->name);
            $this->tag->setDefault("password", $data_supir->password);
            
        }
    }

    /**
     * Creates a new data_supir
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "index"
            ));
        }

        $data_supir = new DataSupir();

        $data_supir->kode_supir = $this->request->getPost("kode_supir");
        $data_supir->nama_supir = $this->request->getPost("nama_supir");
        $data_supir->nomor_sim = $this->request->getPost("nomor_sim");
        $data_supir->alamat = $this->request->getPost("alamat");
        $data_supir->no_tlp = $this->request->getPost("no_tlp");
        $data_supir->jenis_kendaraan = $this->request->getPost("jenis_kendaraan");
        $data_supir->name = $this->request->getPost("name");
        $data_supir->password = $this->request->getPost("password");
        

        if (!$data_supir->save()) {
            foreach ($data_supir->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "new"
            ));
        }

        $this->flash->success("data_supir was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_supir",
            "action" => "index"
        ));

    }

    /**
     * Saves a data_supir edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "index"
            ));
        }

        $_id = $this->request->getPost("kode_supir");


          $data_supir = DataSupir::findFirst(array(
        array(
            "kode_supir" => $_id

        )
        ));
        if (!$data_supir) {
            $this->flash->error("data_supir does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "index"
            ));
        }

        $data_supir->kode_supir = $this->request->getPost("kode_supir");
        $data_supir->nama_supir = $this->request->getPost("nama_supir");
        $data_supir->nomor_sim = $this->request->getPost("nomor_sim");
        $data_supir->alamat = $this->request->getPost("alamat");
        $data_supir->no_tlp = $this->request->getPost("no_tlp");
        $data_supir->jenis_kendaraan = $this->request->getPost("jenis_kendaraan");
        $data_supir->name = $this->request->getPost("name");
        $data_supir->password = $this->request->getPost("password");
        

        if (!$data_supir->save()) {

            foreach ($data_supir->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "edit",
                "params" => array($data_supir->_id)
            ));
        }

        $this->flash->success("data_supir was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_supir",
            "action" => "index"
        ));

    }

    /**
     * Deletes a data_supir
     *
     * @param string $_id
     */
    public function deleteAction($_id)
    {

      
        $data_supir = DataSupir::findFirst(array(
        array(
            "kode_supir" => $_id

        )
        ));
        if (!$data_supir) {
            $this->flash->error("data_supir was not found");

            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "index"
            ));
        }

        if (!$data_supir->delete()) {

            foreach ($data_supir->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_supir",
                "action" => "search"
            ));
        }

        $this->flash->success("data_supir was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_supir",
            "action" => "index"
        ));
    }

}
