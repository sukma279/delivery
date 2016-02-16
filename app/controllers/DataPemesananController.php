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
       
         $this->view->item = $data;
        }

    /**
     * Displays the creation form
     */
    public function newAction()
    {
             $data = DataOngkir::find();
             $this->view->item = $data;
             $datas = DataSupir::find();
             $this->view->items = $datas;

    }

    /**
     * Edits a data_pemesanan
     *
     * @param string $_id
     */
    public function viewAction($_id)
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
            $this->tag->setDefault("alamat", $data_pemesanan->alamat);
            $this->tag->setDefault("no_telp", $data_pemesanan->no_telp);
            $this->tag->setDefault("nama_penerima", $data_pemesanan->nama_penerima);
            $this->tag->setDefault("alamat_penerima", $data_pemesanan->alamat_penerima);
            $this->tag->setDefault("no_telppenerima", $data_pemesanan->no_telppenerima);
            $this->tag->setDefault("nama_daerah", $data_pemesanan->nama_daerah);
            $this->tag->setDefault("tanggal_kirim", $data_pemesanan->tanggal_kirim);
            $this->tag->setDefault("tanggal_terima", $data_pemesanan->tanggal_terima);
            $this->tag->setDefault("berat_barang", $data_pemesanan->berat_barang);
            $this->tag->setDefault("total_ongkir", $data_pemesanan->total_ongkir);
            $this->tag->setDefault("nama_supir", $data_pemesanan->nama_supir);
            
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
        $data_pemesanan->alamat = $this->request->getPost("alamat");
        $data_pemesanan->no_telp = $this->request->getPost("no_telp");
        $data_pemesanan->nama_penerima = $this->request->getPost("nama_penerima");
        $data_pemesanan->alamat_penerima = $this->request->getPost("alamat_penerima");
        $data_pemesanan->no_telppenerima = $this->request->getPost("no_telppenerima");
        $data_pemesanan->nama_daerah = $this->request->getPost("nama_daerah");
        $data_pemesanan->tanggal_kirim = $this->request->getPost("tanggal_kirim");
        $data_pemesanan->tanggal_terima = $this->request->getPost("tanggal_terima");
        $data_pemesanan->berat_barang = $this->request->getPost("berat_barang");
        $data_pemesanan->total_ongkir = $this->request->getPost("total_ongkir");
        $data_pemesanan->nama_supir = $this->request->getPost("nama_supir");
        

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
        $data_pemesanan->alamat = $this->request->getPost("alamat");
        $data_pemesanan->no_telp = $this->request->getPost("no_telp");
        $data_pemesanan->nama_penerima = $this->request->getPost("nama_penerima");
        $data_pemesanan->alamat_penerima = $this->request->getPost("alamat_penerima");
        $data_pemesanan->no_telppenerima = $this->request->getPost("no_telppenerima");
        $data_pemesanan->nama_daerah = $this->request->getPost("nama_daerah");
        $data_pemesanan->tanggal_kirim = $this->request->getPost("tanggal_kirim");
        $data_pemesanan->tanggal_terima = $this->request->getPost("tanggal_terima");
        $data_pemesanan->berat_barang = $this->request->getPost("berat_barang");
        $data_pemesanan->total_ongkir = $this->request->getPost("total_ongkir");
        $data_pemesanan->nama_supir = $this->request->getPost("nama_supir");
        

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

    public function createpdfAction()
    {
        $getdata=DataPemesanan::find();
        $this->views->data_pemesanan=$getdata;
 
    }

    public function reportAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for data_pemesanan
     */
    public function printreportAction()
    {
        $nama = $this->request->getPost("tanggal_kirim");
        If($tanggal<>""){
            $data = DataPemesanan::find( array(
        array(
            "tanggal_kirim" => $tanggal

        )
        )); 
        }
        else {
        $data = DataPemesanan::find();
        }
       
         $this->view->item = $data;
        }

}
