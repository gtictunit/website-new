<?php
    class insertClass{

        //database tables
        private $login = "`gtm-login`";
        private $admin = "`gtm-admin-profile`";
        private $pastor_desk = "`gtm-pastor-desk`";
        private $sermon_month = "`gtm-sermon-month`";
        private $audio_message = "`gtm-audio-message`";
        private $streaming_link = "`gtm-streaming-link`";
        private $calendar = "`gtm-calendar`";

        //Database connector
        private $Connection;

        //pastor's desk form inputs
        private $pd_topic;
        private $pd_writer;
        private $pd_day;
        private $pd_month;
        private $pd_year;
        private $pd_message;

        //sermon of the month form inputs
        private $sotm_topic;
        private $sotm_preacher;
        private $sotm_month;
        private $sotm_year;
        private $sotm_message;

        //audio message form inputs
        private $am_topic;
        private $am_preacher;
        private $am_day;
        private $am_month;
        private $am_year;
        private $am_service;
        private $am_filename;
        private $am_upload;
    	private $am_uploadErr;
    	private $am_upName;
    	private $am_upType;
    	private $am_upSize;
    	private $am_upTemp;

        //administrator form inputs
        private $adm_firstname;
        private $adm_lastname;
        private $adm_email;
        private $adm_level;
        private $adm_password;

        //streaming link form inputs
        private $sl_day;
        private $sl_month;
        private $sl_year;
        private $sl_service;
        private $sl_link;

        //church calendar form inputs
        private $ca_day;
        private $ca_month;
        private $ca_year;
        private $ca_event;

        public function __construct() {
            require_once  "core/Connector.php";        
            $this->connector = new Connector();
            $this->Connection = $this->connector->Connection();
        }
       //getter and setter method for pd_topic
        public function getPdTopic() {
            return $this->pd_topic;
        }
        public function setPdTopic($pd_topic) {
            $this->pd_topic = $pd_topic;
        }
        //getter and setter method for writer
        public function getPdWriter() {
            return $this->pd_writer;
        }
        public function setPdWriter($pd_writer) {
            $this->pd_writer = $pd_writer;
        }
        //getter and setter method for day
        public function getPdDay() {
            return $this->pd_day;
        }
        public function setPdDay($pd_day) {
            $this->pd_day = $pd_day;
        }
        //getter and setter method for month
        public function getPdMonth() {
            return $this->pd_month;
        }
        public function setPdMonth($pd_month) {
            $this->pd_month = $pd_month;
        }
        //getter and setter method for year
        public function getPdYear() {
            return $this->pd_year;
        }
        public function setPdYear($pd_year) {
            $this->pd_year = $pd_year;
        }
        //getter and setter method for message
        public function getPdMessage() {
            return $this->pd_message;
        }
        public function setPdMessage($pd_message) {
            $this->pd_message = $pd_message;
        }
        //getter and setter method for sotm_topic
        public function getSotmTopic() {
            return $this->sotm_topic;
        }
        public function setSotmTopic($sotm_topic) {
            $this->sotm_topic = $sotm_topic;
        }
        //getter and setter method for sotm_preacher
        public function getSotmPreacher() {
            return $this->sotm_preacher;
        }
        public function setSotmPreacher($sotm_preacher) {
            $this->sotm_preacher = $sotm_preacher;
        }
        //getter and setter method for sotm_month
        public function getSotmMonth() {
            return $this->sotm_month;
        }
        public function setSotmMonth($sotm_month) {
            $this->sotm_month = $sotm_month;
        }
        //getter and setter method for sotm_year
        public function getSotmYear() {
            return $this->sotm_year;
        }
        public function setSotmYear($sotm_year) {
            $this->sotm_year = $sotm_year;
        }
        //getter and setter method for sotm_message
        public function getSotmMessage() {
            return $this->sotm_message;
        }
        public function setSotmMessage($sotm_message) {
            $this->sotm_message = $sotm_message;
        }

        //getter and setter method for am_topic
        public function getAmTopic() {
            return $this->am_topic;
        }
        public function setAmTopic($am_topic) {
            $this->am_topic = $am_topic;
        }
        //getter and setter method for am_preacher
        public function getAmPreacher() {
            return $this->am_preacher;
        }
        public function setAmPreacher($am_preacher) {
            $this->am_preacher = $am_preacher;
        }
        //getter and setter method for am_day
        public function getAmDay() {
            return $this->am_day;
        }
        public function setAmDay($am_day) {
            $this->am_day = $am_day;
        }
        //getter and setter method for am_month
        public function getAmMonth() {
            return $this->am_month;
        }
        public function setAmMonth($am_month) {
            $this->am_month = $am_month;
        }
        //getter and setter method for am_year
        public function getAmYear() {
            return $this->am_year;
        }
        public function setAmYear($am_year) {
            $this->am_year = $am_year;
        }
        //getter and setter method for am_service
        public function getAmService() {
            return $this->am_service;
        }
        public function setAmService($am_service) {
            $this->am_service = $am_service;
        }
        //getter and setter method for am_filename
        public function getAmFilename() {
            return $this->am_filename;
        }
        public function setAmFilename($fn) {
            $this->am_filename = $fn;
        }
        //getter and setter method for am_uploaad
        public function getAmUpload() {
            return $this->am_upload;
        }
        public function setAmUpload($am_upload) {
            $this->am_upload =$am_upload;
        }
        //getter and setter method for am_uploaadErr
        public function getAmUploadErr() {
            return $this->am_uploadErr;
        }
        public function setAmUploadErr($am_uploadErr) {
            $this->am_uploadErr =$am_uploadErr;
        }
        //getter and setter method for $am_upName
        public function getAmUpName() {
            return $this->am_upName;
        }
        public function setAmUpName($am_upName) {
            $this->am_upName =$am_upName;
        }
        //getter and setter method for $am_upType
        public function getAmUpType() {
            return $this->am_upType;
        }
        public function setAmUpType($am_upType) {
            $this->am_upType =$am_upType;
        }
        //getter and setter method for $am_upSize
        public function getAmUpSize() {
            return $this->am_upSize;
        }
        public function setAmUpSize($am_upSize) {
            $this->am_upSize =$am_upSize;
        }
        //getter and setter method for $am_upTemp
        public function getAmUpTemp() {
            return $this->am_upTemp;
        }
        public function setAmUpTemp($am_upTemp) {
            $this->am_upTemp =$am_upTemp;
        }

        //getter and setter method for $adm_firstname
        public function getAdmFirstname() {
            return $this->adm_firstname;
        }
        public function setAdmFirstname($adm_firstname) {
            $this->adm_firstname =$adm_firstname;
        }
        //getter and setter method for $adm_lastname
        public function getAdmLastname() {
            return $this->adm_lastname;
        }
        public function setAdmLastname($adm_lastname) {
            $this->adm_lastname =$adm_lastname;
        }
        //getter and setter method for $adm_email
        public function getAdmEmail() {
            return $this->adm_email;
        }
        public function setAdmEmail($adm_email) {
            $this->adm_email =$adm_email;
        }
        //getter and setter method for $adm_level
        public function getAdmLevel() {
            return $this->adm_level;
        }
        public function setAdmLevel($adm_level) {
            $this->adm_level =$adm_level;
        }

        //getter and setter method for streaming day
        public function getSlDay() {
            return $this->sl_day;
        }
        public function setSlDay($sl_day) {
            $this->sl_day = $sl_day;
        }
        //getter and setter method for streaming month
        public function getSlMonth() {
            return $this->sl_month;
        }
        public function setSlMonth($sl_month) {
            $this->sl_month = $sl_month;
        }
        //getter and setter method for streaming year
        public function getSlYear() {
            return $this->sl_year;
        }
        public function setSlYear($sl_year) {
            $this->sl_year = $sl_year;
        }
        //getter and setter method for streaming service
        public function getSlService() {
            return $this->sl_service;
        }
        public function setSlService($sl_service) {
            $this->sl_service = $sl_service;
        }
        //getter and setter method for streaming day
        public function getSlLink() {
            return $this->sl_link;
        }
        public function setSlLink($sl_link) {
            $this->sl_link = $sl_link;
        }

        //getter and setter method for calendar day
        public function getCaDay() {
            return $this->ca_day;
        }
        public function setCaDay($ca_day) {
            $this->ca_day = $ca_day;
        }
         //getter and setter method for calendar month
         public function getCaMonth() {
            return $this->ca_month;
        }
        public function setCaMonth($ca_month) {
            $this->ca_month = $ca_month;
        }
         //getter and setter method for calendar year
         public function getCaYear() {
            return $this->ca_year;
        }
        public function setCaYear($ca_year) {
            $this->ca_year = $ca_year;
        }
         //getter and setter method for calendar event
         public function getCaEvent() {
            return $this->ca_event;
        }
        public function setCaEvent($ca_event) {
            $this->ca_event = $ca_event;
        }

        //Insert Pastor Desk method
        public function insPastorDesk(){
            $this->setPdTopic($_POST["pd_topic"]);
            $this->setPdWriter($_POST["pd_writer"]);
            $this->setPdDay($_POST["pd_day"]);
            $this->setPdMonth($_POST["pd_month"]);
            $this->setPdYear($_POST["pd_year"]);
            $this->setPdMessage($_POST["pd_message"]);

           $exist = $this->getPastorDesk($this->pd_topic, $this->pd_writer);
            
            if(empty($this->pd_topic) or empty($this->pd_writer) or empty($this->pd_day) or empty($this->pd_month) or empty($this->pd_year) or empty($this->pd_message)){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return "<p class='userAuthFailed'>Pastor's Desk Already Exist for ".$this->pd_topic."&nbsp; writing by".$this->pd_writer."</p>";
            }
            else{
                if($this->pastorDeskInsert() == 1 ){
                  //  if($this->mailSender->accountConfirmation($this->firstname, $this->email, $this->lastname)){
                        $this->Connection = null; //connection closure
                        return "<p class='insertSuccess'>Pastor's Desk Added Successfully</p>";
                   // }
                }
            }
        }
        public function pastorDeskInsert(){
            $query = $this->Connection->prepare(
                "INSERT INTO " . $this->pastor_desk . "(`gtm-auto-no`,`gtm-pd-title`, `gtm-pd-text`, `gtm-pd-day`, `gtm-pd-month`, `gtm-pd-year`, `gtm-pd-writer`, `gtm-pd-flag`) VALUES('',:ti,:te,:da,:mo,:yr,:wr,:fl)"
            );
            $query->execute(array(':ti'=>$this->pd_topic, ':te'=>$this->pd_message, ':da'=>$this->pd_day, ':mo'=>$this->pd_month, ':yr'=>$this->pd_year, ':wr'=>$this->pd_writer, ':fl'=>1));
            $result = $query->rowCount();
            return $result;
        }
        //check if pastor's desk already exist
        public function getPastorDesk($topic, $writer){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->pastor_desk . "  WHERE `gtm-pd-title` = :pdt AND `gtm-pd-writer` = :pdw"
            );
            $query->execute(array("pdt" => $topic, "pdw" => $writer));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }

        //Insert Sermon of the Month method
        public function insSermonMonth(){
            $this->setSotmTopic($_POST["sotm_topic"]);
            $this->setSotmPreacher($_POST["sotm_preacher"]);
            $this->setSotmMonth($_POST["sotm_month"]);
            $this->setSotmYear($_POST["sotm_year"]);
            $this->setSotmMessage($_POST["sotm_message"]);

           $exist = $this->getSermonMonth($this->sotm_month, $this->sotm_year);
            
            if(empty($this->sotm_topic) or empty($this->sotm_preacher) or empty($this->sotm_month) or empty($this->sotm_year) or empty($this->sotm_message)){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return '<p class="userAuthFailed">Sermon of the Month Already Exist for '.$this->sotm_month.'&nbsp;'.$this->sotm_year.'</p>';
            }
            else{
                if($this->sermonMonthInsert() == 1 ){
                    $this->Connection = null; //connection closure
                    return "<p class='insertSuccess'>Sermon of the Month Added Successfully</p>";
                }
            }
        }
        public function sermonMonthInsert(){
            $query = $this->Connection->prepare(
                "INSERT INTO " . $this->sermon_month . "(`gtm-auto-no`,`gtm-sotm-title`, `gtm-sotm-text`,  `gtm-sotm-month`, `gtm-sotm-year`, `gtm-sotm-preacher`, `gtm-sotm-flag`) VALUES('',:ti,:te,:mo,:yr,:wr,:fl)"
            );
            $query->execute(array(':ti'=>$this->sotm_topic, ':te'=>$this->sotm_message, ':mo'=>$this->sotm_month, ':yr'=>$this->sotm_year, ':wr'=>$this->sotm_preacher, ':fl'=>1));
            $result = $query->rowCount();
            return $result;
        }
        //check if sermon of the month already exist
        public function getSermonMonth($mo, $yr){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->sermon_month . "  WHERE `gtm-sotm-month` = :smm AND `gtm-sotm-year` = :smy"
            );
            $query->execute(array("smm" => $mo, "smy" => $yr));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }

         //Insert Audio Message method
         public function insAudioMessage(){
            $this->setAmTopic($_POST["am_topic"]);
            $this->setAmPreacher($_POST["am_preacher"]);
            $this->setAmDay($_POST["am_day"]);
            $this->setAmMonth($_POST["am_month"]);
            $this->setAmYear($_POST["am_year"]);
            $this->setAmService($_POST["am_service"]);
            $this->setAmUpload($_FILES['am_audio']);
            $this->setAmUploadErr($_FILES['am_audio']['error']);
            $this->setAmUpName($_FILES['am_audio']['name']);
            $this->setAmUpSize($_FILES['am_audio']['size']);
            $this->setAmUpType($_FILES['am_audio']['type']);
            $this->setAmUpTemp($_FILES['am_audio']['tmp_name']);

            $ext  = pathinfo( $this->am_upName, PATHINFO_EXTENSION );
            $key = $this->am_service.$this->am_day.$this->am_month.$this->am_year;
            $key .= '.'.$ext;
            $this->setAmFilename($key);

           $exist = $this->getAudioMessage();
            
            if(empty($this->am_topic) or empty($this->am_preacher) or empty($this->am_day) or empty($this->am_month) or empty($this->am_year) or empty($this->am_service) or $this->am_upSize == 0 or $this->am_upTemp==""){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return '<p class="userAuthFailed">Audio Message Already Exist for '.$this->am_month.'&nbsp;'.$this->am_day.',&nbsp;'.$this->am_year.'</p>';
            }
            else{
                $upCk = $this->chkAudioMessage($this->am_upName, $this->am_upSize);
                if($upCk == 1){
                    return '<p class="userAuthFailed">Invalid Audio Format. <small>(Upload Only MP3 format)</small> </p>';
                }
                else if($upCk == 2){
                    return '<p class="userAuthFailed">Audio File too Large. <small>(Upload limit is 20MB)</small> </p>';
                }
                else{
                    $mvCk = $this->uploadMessage();
                    if($mvCk == 1){
                        if($this->audioMessageInsert() == 1 ){
                            $this->Connection = null; //connection closure
                            return "<p class='insertSuccess'>New Message Added Successfully</p>";
                        }
                    }
                    else{
                        return '<p class="userAuthFailed">Upload Failed. </p>';
                    }
                }
                
            }
        }
        public function audioMessageInsert(){
            $query = $this->Connection->prepare(
                "INSERT INTO " . $this->audio_message . "(`gtm-auto-no`,`gtm-am-title`,`gtm-am-preacher`,`gtm-am-day`,`gtm-am-month`,`gtm-am-year`,`gtm-am-service`,`gtm-am-filename`) VALUES('',:ti,:pr,:da,:mo,:yr,:sr,:fn)"
            );
            $query->execute(array(':ti'=>$this->am_topic, ':pr'=>$this->am_preacher, ':da'=>$this->am_day, ':mo'=>$this->am_month, ':yr'=>$this->am_year, ':sr'=>$this->am_service, ':fn'=>$this->am_filename));
            $result = $query->rowCount();
            return $result;
        }
        //check if audio already exist
        public function getAudioMessage(){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->audio_message . "  WHERE `gtm-am-filename` = :fn"
            );
            $query->execute(array("fn" => $this->am_filename));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }
        //check audio message uploaded
        public function chkAudioMessage($n, $s){
            $allowed = array("mp3" => "audio/mp3");
            $ext = pathinfo($n, PATHINFO_EXTENSION);
            $maxsize = 20 * 1024 * 1024;
            if(!array_key_exists($ext, $allowed)){
                return 1;
            }
            else{
                
                if($s > $maxsize){
                    return 2;
                }
                else{
                    return 0;
                }
            }
        }
        //upload audio message
        public function uploadMessage(){
            $dest = "./library/audio/".$this->am_filename;
            if(@move_uploaded_file($this->am_upTemp, $dest)){
                return 1;
            }
            else{
                return 0;
            }
        }
        //Administrator method
        public function insAdministrator(){
            $this->setAdmFirstname($_POST["adm_firstname"]);
            $this->setAdmLastname($_POST["adm_lastname"]);
            $this->setAdmEmail($_POST["adm_email"]);
            $this->setAdmLevel($_POST["adm_level"]);

            $this->adm_password = md5($this->adm_lastname);

           $exist = $this->getAdministrator($this->adm_email);
            
            if(empty($this->adm_firstname) or empty($this->adm_lastname) or empty($this->adm_email) or empty($this->adm_level)){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return '<p class="userAuthFailed">Administrator with '.$this->adm_email.' already exist.</p>';
            }
            else{
                if($this->administratorInsert() == 11 ){
                    $this->Connection = null; //connection closure
                    return "<p class='insertSuccess'>Administrator Info Added Successfully</p>";
                }
            }
        }
        public function administratorInsert(){
            $query1 = $this->Connection->prepare(
                "INSERT INTO " . $this->login . "(`gtm-auto-no`, `gtm-admin-email`, `gtm-admin-password`, `gtm-admin-act-status`, `gtm-admin-status`, `gtm-admin-level`) VALUES('',:em,:pa,:ac,:st,:lv)"
            );
            $query1->execute(array(':em'=>$this->adm_email, ':pa'=>$this->adm_password, ':ac'=>0, ':st'=>1, ':lv'=>$this->adm_level));
            $result1 = $query1->rowCount();

            $query2 = $this->Connection->prepare(
                "INSERT INTO " . $this->admin . "(`gtm-auto-no`, `gtm-admin-fname`, `gtm-admin-lname`, `gtm-admin-email`) VALUES('',:fn,:ln,:em)"
            );
            $query2->execute(array(':fn'=>$this->adm_firstname, ':ln'=>$this->adm_lastname, ':em'=>$this->adm_email));
            $result2 = $query2->rowCount();
            
            return $result1.$result2;
        }
        //check if sermon of the month already exist
        public function getAdministrator($email){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->admin . "  WHERE `gtm-admin-email` = :em"
            );
            $query->execute(array("em" => $email));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }

        //streaming link method
        public function insStreamingLink(){
            $this->setSlDay($_POST["sl_day"]);
            $this->setSlMonth($_POST["sl_month"]);
            $this->setSlYear($_POST["sl_year"]);
            $this->setSlService($_POST["sl_service"]);
            $this->setSlLink($_POST["sl_link"]);

            $exist = $this->getStreamingLink($this->sl_day, $this->sl_month, $this->sl_year);
            
            if(empty($this->sl_day) or empty($this->sl_month) or empty($this->sl_year) or empty($this->sl_service) or empty($this->sl_link)){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return '<p class="userAuthFailed">Streaming Link already exist.</p>';
            }
            else{
                if($this->streamingLinkInsert() == 1 ){
                    $this->Connection = null; //connection closure
                    return "<p class='insertSuccess'>Administrator Info Added Successfully</p>";
                }
            }
        }
        public function streamingLinkInsert(){
            $query = $this->Connection->prepare(
                "INSERT INTO " . $this->streaming_link . "(`gtm-auto-no`, `gtm-stream-day`, `gtm-stream-month`, `gtm-stream-year`, `gtm-stream-link`, `gtm-stream-service`) VALUES('',:da,:mo,:yr,:sl,:sr)"
            );
            $query->execute(array(':da'=>$this->sl_day, ':mo'=>$this->sl_month, ':yr'=>$this->sl_year, ':sl'=>$this->sl_link, ':sr'=>$this->sl_service));
            $result = $query->rowCount();
            
            return $result;
        }
        //check if sl already exist
        public function getStreamingLink($d, $m, $y){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->streaming_link . "  WHERE `gtm-stream-day` = :da AND `gtm-stream-month` = :mo AND `gtm-stream-year` = :yr"
            );
            $query->execute(array("da" => $d, "mo" => $m, "yr" => $y));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }

        //Calendar method
        public function insCalendar(){
            $this->setCaDay($_POST["ca_day"]);
            $this->setCaMonth($_POST["ca_month"]);
            $this->setCaYear($_POST["ca_year"]);
            $this->setCaEvent($_POST["ca_event"]);

            $exist = $this->getCalendar($this->ca_day, $this->ca_month, $this->ca_year);
            
            if(empty($this->ca_day) or empty($this->ca_month) or empty($this->ca_year) or empty($this->ca_event)){
                return '<p class="userAuthFailed">Fill All the Fields of the Form</p>';
            }
            elseif($exist == 1){
                $this->Connection = null; //connection closure
                return '<p class="userAuthFailed">Streaming Link already exist.</p>';
            }
            else{
                if($this->calendarInsert() == 1 ){
                    $this->Connection = null; //connection closure
                    return "<p class='insertSuccess'>New Event Added Successfully</p>";
                }
            }
        }
        public function calendarInsert(){
            $query = $this->Connection->prepare(
                "INSERT INTO " . $this->calendar . "(`gtm-auto-no`, `gtm-cal-day`, `gtm-cal-month`, `gtm-cal-year`, `gtm-cal-event`) VALUES('',:da,:mo,:yr,:ev)"
            );
            $query->execute(array(':da'=>$this->ca_day, ':mo'=>$this->ca_month, ':yr'=>$this->ca_year, ':ev'=>$this->ca_event));
            $result = $query->rowCount();
            
            return $result;
        }
        //check if sl already exist
        public function getCalendar($d, $m, $y){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->calendar . "  WHERE `gtm-cal-day` = :da AND `gtm-cal-month` = :mo AND `gtm-cal-year` = :yr"
            );
            $query->execute(array("da" => $d, "mo" => $m, "yr" => $y));
            
            $result = $query->rowCount();
           // $this->Connection = null; //connection closure
            return $result;
        }
    }