<?php
class pastorDesk{
    
    
    private $insert;
    private $select;

    public function __construct() {
        require_once  "model/insertClass.php";        
        $this->insert = new insertClass();
        require_once  "model/selectClass.php";        
        $this->select = new selectClass(); 
        require_once  "model/updateClass.php";        
        $this->update = new updateClass(); 
    }
    public function newPastorDesk(){
        $this->update->unflagPastorDesk();//to change existing pastor to old
        return $this->insert->insPastorDesk();
    }    
    public function viewAllPastorDesk(){
        return $this->select->viewAllPastorDesk();
    }
    public function viewPastorDeskHeader(){
        return $this->select->viewPastorDeskHead();
    }
    public function viewPastorDeskBody(){
        
    }
}
