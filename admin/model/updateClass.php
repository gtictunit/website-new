<?php
    class updateClass{

        private $login = "`gtm-login`";
        private $pastor_desk = "`gtm-pastor-desk`";
        private $sermon_month = "`gtm-sermon-month`";

        private $Connection;
        /*private $password; 
        private $cpassword;
        private $userSession;
        private $cyear;*/
        public function __construct() {
            require_once  "core/Connector.php";        
            $this->connector = new Connector();
            $this->Connection = $this->connector->Connection();
        }
        public function getPassword() {
            return $this->password;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
       

        public function unflagPastorDesk(){
            $query = $this->Connection->prepare(
                "UPDATE " . $this->pastor_desk . " SET `gtm-pd-flag`=:fg"
            );
            $query->execute(array("fg" =>0));
            $result = $query->rowCount();
            $this->Connection = null; //connection closure

            return $result;
        }

        public function unflagSermonMonth(){
            $query = $this->Connection->prepare(
                "UPDATE " . $this->sermon_month . " SET `gtm-sotm-flag`=:fg"
            );
            $query->execute(array("fg" =>0));
            $result = $query->rowCount();
            $this->Connection = null; //connection closure

            return $result;
        }


        /*
        public function passwordChanged(){
            $this->setPassword($_POST["npass"]);
            $this->setcPassword(($_POST["cpass"]));
            
            $this->setUserSession($_SESSION['ccms_user_email_temp']);  

            if(empty($this->password) or empty($this->cpassword)){
                return '<p class="userAuthFailed">Enter Both New Password Email and Confirma Password</p>';
            }
            elseif(!empty($this->password) != !empty($this->cpassword)){
                return '<p class="userAuthFailed">The Two Password Entered Should Be The Same</p>';
            }
            else{
                $this->password = md5($this->password);
                if($this->changePassword() == 1){
                    return '<p class="insertSuccess">Password Successfully Changed. You Can Proceed To <a class="insertSuccessa" href="index.php">Login</a></p> ';
                }
            }
        }
        public function changeCyear(){
            $query = $this->Connection->prepare(
                "UPDATE " . $this->current_year . " SET `ccms-current`=0"
            );
            $query->execute();
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure

            return $result;
        }
        public function changeCyearSetNew($yr){
            $query = $this->Connection->prepare(
                "UPDATE " . $this->current_year . " SET `ccms-current`=1 WHERE `ccms-year`=".$yr
            );
            $query->execute();
            $result = $query->rowCount();
          //  $this->Connection = null; //connection closure

            return $result;
        }*/
    }