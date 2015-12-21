<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class DataPemesananController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_pemesanan
     */
    public function searchAction()
    {
        //$this->view->disable();
       // $this->response->setContentType('application/json');
        /*tmbh ispost*/
        $nama = $this->request->getPost("nama_pemesan");
        If($nama<>""){
            $data = DataPemesanan::find( array(
        array(
            "nama_pemesan" => $nama

        )
        )); 
        }
        else {
        $data = DataPemesanan::find();
        }
       
        //echo $data->nama_pemesan;
        //echo $data->nama_daerah;
        #$echo $data->total_ongkir;
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
     * Edits a data_pemesanan
     *
     * @param string $_id
     */
    public function editAction($_id)
    {

        if (!$this->request->isPost()) {

            $data_pemesanan = DataPemesanan::findFirst(array(
            array(
            "kode_pemesanan" => $_id
            )
            ));
            if (!$data_pemesanan) {
                $this->flash->error("data_pemesanan was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "data_pemesanan",
                    "action" => "index"
                ));
            }

            $this->view->_id = $data_pemesanan->_id;

            //$this->tag->setDefault("_id", $data_pemesanan->_id);
            $this->tag->setDefault("kode_pemesanan", $data_pemesanan->kode_pemesanan);
            $this->tag->setDefault("nama_pemesan", $data_pemesanan->nama_pemesan);
            $this->tag->setDefault("nama_daerah", $data_pemesanan->nama_daerah);
            $this->tag->setDefault("berat_barang", $data_pemesanan->berat_barang);
            $this->tag->setDefault("total_ongkir", $data_pemesanan->total_ongkir);
            
        }
    }

    /**
     * Creates a new data_pemesanan
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "index"
            ));
        }

        $data_pemesanan = new DataPemesanan();

        $data_pemesanan->kode_pemesanan = $this->request->getPost("kode_pemesanan");
        $data_pemesanan->nama_pemesan = $this->request->getPost("nama_pemesan");
        $data_pemesanan->nama_daerah = $this->request->getPost("nama_daerah");
        $data_pemesanan->berat_barang = $this->request->getPost("berat_barang");
        $data_pemesanan->total_ongkir = $this->request->getPost("total_ongkir");
        

        if (!$data_pemesanan->save()) {
            foreach ($data_pemesanan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "new"
            ));
        }

        $this->flash->success("data_pemesanan was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_pemesanan",
            "action" => "index"
        ));

    }

    /**
     * Saves a data_pemesanan edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "index"
            ));
        }

        $_id = $this->request->getPost("kode_pemesanan");


          $data_pemesanan = DataPemesanan::findFirst(array(
        array(
            "kode_pemesanan" => $_id

        )
        ));
        if (!$data_pemesanan) {
            $this->flash->error("data_pemesanan does not exist " . $_id);

            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "index"
            ));
        }

        $data_pemesanan->kode_pemesanan = $this->request->getPost("kode_pemesanan");
        $data_pemesanan->nama_pemesan = $this->request->getPost("nama_pemesan");
        $data_pemesanan->nama_daerah = $this->request->getPost("nama_daerah");
        $data_pemesanan->berat_barang = $this->request->getPost("berat_barang");
        $data_pemesanan->total_ongkir = $this->request->getPost("total_ongkir");
        

        if (!$data_pemesanan->save()) {

            foreach ($data_pemesanan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "edit",
                "params" => array($data_pemesanan->_id)
            ));
        }

        $this->flash->success("data_pemesanan was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_pemesanan",
            "action" => "index"
        ));

    }

    /**
     * Deletes a data_pemesanan
     *
     * @param string $_id
     */
    public function deleteAction($_id)
    {

      
        $data_pemesanan = DataPemesanan::findFirst(array(
        array(
            "kode_pemesanan" => $_id

        )
        ));
        if (!$data_pemesanan) {
            $this->flash->error("data_pemesanan was not found");

            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "index"
            ));
        }

        if (!$data_pemesanan->delete()) {

            foreach ($data_pemesanan->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "data_pemesanan",
                "action" => "search"
            ));
        }

        $this->flash->success("data_pemesanan was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "data_pemesanan",
            "action" => "index"
        ));
    }

}
