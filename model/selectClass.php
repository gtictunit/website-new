<?php
    class selectClass{
        //database tables
        private $login = "`gtm-login`";
        private $admin = "`gtm-admin-profile`"; 
        private $pastor_desk = "`gtm-pastor-desk`";
        private $sermon_month = "`gtm-sermon-month`";
        private $audio_message = "`gtm-audio-message`";
        private $streaming_link = "`gtm-streaming-link`";
        private $calendar = "`gtm-calendar`";


        //Database connection
        private $Connection;

        //Variable for session
        private $adminSession;
  
        public function __construct() {
            require_once  "core/Connector.php";        
            $this->connector = new Connector();
            $this->Connection = $this->connector->Connection();
        }
       
        public function viewPastorDeskHead(){
            $query = $this->Connection->prepare(
                "SELECT `gtm-pd-title`, `gtm-pd-writer`
                  FROM " . $this->pastor_desk . " WHERE `gtm-pd-flag`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $out="";
            if(isset($result)){
                $out = '<div class="pdeskTitle">'.$result[0].'<br/><small> By '.$result[1].'</small></div>';
            }
            else{
                $out = '<div class="pdeskTitle">No Content Yet</div>';
            }
            
            return $out;
        }
        public function viewPastorDeskBody(){
            $query = $this->Connection->prepare(
                "SELECT `gtm-pd-text`, `gtm-pd-day`, `gtm-pd-month`, `gtm-pd-year`
                  FROM " . $this->pastor_desk . " WHERE `gtm-pd-flag`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $out="";
            if(isset($result)){
                $out = '<div class="pdeskBody">'.$result[0].'<br>'.$result[2].'&nbsp;'.$result[1].', '.$result[3].'</div>';
            }
            else{
                $out = '<div class="pdeskTitle">No Content Yet</div>';
            }
            $this->Connection = null; //connection closure
            return $out;
        }
        public function viewSermonMonthHead(){
            $query = $this->Connection->prepare(
                "SELECT `gtm-sotm-title`, `gtm-sotm-preacher`
                  FROM " . $this->sermon_month . " WHERE `gtm-sotm-flag`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $out="";
            if(isset($result)){
                $out = '<div class="pdeskTitle">'.$result[0].'<br/><small> By '.$result[1].'</small></div>';
            }
            else{
                $out = '<div class="pdeskTitle">No Content Yet</div>';
            }
            
            return $out;
        }
        public function viewSermonMonthBody(){
            $query = $this->Connection->prepare(
                "SELECT `gtm-sotm-text`,  `gtm-sotm-month`, `gtm-sotm-year`
                  FROM " . $this->sermon_month . " WHERE `gtm-sotm-flag`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $out="";
            if(isset($result)){
                $out = '<div class="pdeskBody">'.$result[0].'<br>'.$result[1].',&nbsp;'.$result[2].'</div>';
            }
            else{
                $out = '<div class="pdeskTitle">No Content Yet</div>';
            }
            $this->Connection = null; //connection closure
            return $out;
        }

       
    }