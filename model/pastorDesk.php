<?php
class pastorDesk{
    
    
    private $insert;
    private $select;
    private $update;

    public function __construct() {
        require_once  "model/insertClass.php";        
        $this->insert = new insertClass();
        require_once  "model/selectClass.php";        
        $this->select = new selectClass(); 
        require_once  "model/updateClass.php";        
        $this->update = new updateClass(); 
    }
    
    public function viewPastorDeskHead(){
        return $this->select->viewPastorDeskHead();
    }
    public function viewPastorDeskBody(){
        return $this->select->viewPastorDeskBody();  
    }
}
