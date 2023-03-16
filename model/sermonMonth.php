<?php
    class sermonMonth{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
            require_once  "model/selectClass.php";        
            $this->select = new selectClass(); 
            require_once  "model/updateClass.php";        
            $this->update = new updateClass(); 
        }
        public function viewSermonMonthHead(){
            return $this->select->viewSermonMonthHead();
        }
        public function viewSermonMonthBody(){
            return $this->select->viewSermonMonthBody();  
        }
    }
