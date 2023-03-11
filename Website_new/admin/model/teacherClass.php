<?php
    class teacherClass{
        private $Insert;

        public function __construct() {
            require_once  "model/insertClass.php";        
            $this->Insert = new insertClass();
        }
        
        public function insUserProfile1(){
                return $this->Insert->insertProfile1();
        }
    }