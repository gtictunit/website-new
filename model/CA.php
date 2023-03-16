<?php
class CA{
    
    
    private $insert;
    private $select;

    public function __construct() {
        require_once  "model/insertClass.php";        
        $this->insert = new insertClass();
        require_once  "model/selectClass.php";        
        $this->select = new selectClass(); 
    }
    public function insCalendar(){
        return $this->insert->insCalendar();
    }    
    public function viewAllCalendar(){
        return $this->select->viewAllCalendar();
    }
}
