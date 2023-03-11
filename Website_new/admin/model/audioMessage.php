<?php
    class audioMessage{
        
        
        private $insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->insert = new insertClass();
        }
        public function newAudioMessage(){
            return $this->insert->insAudioMessage();
        }    
    }
