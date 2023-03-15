<?php
    class audioMessage{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
            require_once  "model/selectClass.php";        
            $this->select = new selectClass();
        }
        public function newAudioMessage(){
            return $this->insert->insAudioMessage();
        }    
        public function viewAllAudioMessage(){
            return $this->select->viewAllAudioMessage();
        }
    }
