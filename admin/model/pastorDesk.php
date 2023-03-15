<?php
class pastorDesk{
    
    
    private $insert;
    private $select;

    public function __construct() {
        require_once  "model/insertClass.php";        
        $this->insert = new insertClass();
        require_once  "model/selectClass.php";        
        $this->select = new selectClass(); 
    }
    public function newPastorDesk(){
        return $this->insert->insPastorDesk();
    }    
    public function viewAllPastorDesk(){
        return $this->select->viewAllPastorDesk();
    }
}
