<?php
class KoordinatController extends ControllerBase
{
 
    public function indexAction()
    {
        $this->view->disable();
        $this->response->setContentType('application/json');
        $data = Koordinat::find();
        echo json_encode($data);
    }
  }