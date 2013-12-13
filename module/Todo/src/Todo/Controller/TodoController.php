<?php

namespace Todo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Json\Json;
use Zend\Db\ResultSet\ResultSet;

class TodoController extends AbstractActionController {

    public function indexAction() {
        
    }

    public function listAction() {
        $data = array(array("date_tache" => "23/12/2013", "tache" => "congé"), array("date_tache" => "21/12/2013", "tache" => "congé"), array("date_tache" => "21/12/2013", "tache" => "congé"), array("date_tache" => "21/12/2013", "tache" => "congé"));



        echo Json::encode($data);
        exit();
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
