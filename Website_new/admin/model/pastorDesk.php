<?php
class pastorDesk{
    
    
    private $insert;

    public function __construct() {
        require_once  "model/insertClass.php";        
        $this->insert = new insertClass();
    }
    public function newPastorDesk(){
        return $this->insert->insPastorDesk();
    }    
}
