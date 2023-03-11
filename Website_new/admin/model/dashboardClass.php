<?php
    class dashboardClass{
        private $Select;

        public function __construct() {
            require_once  "model/selectClass.php";        
            $this->Select = new selectClass();
        }
        public function menu(){
            return $this->Select->adminMenu();
        }
        public function adminEmail(){
            return $this->Select->adminEmail();
        }
    }