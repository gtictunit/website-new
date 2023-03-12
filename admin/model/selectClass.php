<?php
    class selectClass{
        //database tables
        private $login = "`gtm-login`";
        private $admin = "`gtm-admin-profile`";
        //Database connection
        private $Connection;
        //Parameters form forms
        private $email;
        private $password;
        //Variable for session
        private $adminSession;

        public function __construct() {
            require_once  "core/Connector.php";        
            $this->connector = new Connector();
            $this->Connection = $this->connector->Connection();
        }
        public function getEmail() {
            return $this->email;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getpassword() {
            return $this->password;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
        public function getAdminSession() {
            return $this->adminSession;
        }
        public function setAdminSession($adminSession) {
            $this->adminSession = $adminSession;
        }
        public function adminMenu(){
            $this->setAdminSession($_SESSION['gtm_admin_email']);
            return $this->getAdminLevel();
            
        }
        public function adminEmail(){
            $this->setAdminSession($_SESSION['gtm_admin_email']);    
            return $this->adminSession;        
        }
        public function getAdminLevel(){
            $query = $this->Connection->prepare(
                "SELECT `gtm-admin-level`  FROM " . $this->login . "  WHERE `gtm-admin-email` = :em"
            );
            $query->execute(array("em" => $this->adminSession));
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $this->Connection = null; //connection closure
            if($result[0] == 1){
                return "adminMenu.php";
            }
        }

        
        public function login(){
            $this->setEmail($_POST["email"]);
            $this->setPassword(($_POST["password"]));
           // $this->password = md5($this->password);
            if(empty($this->email) or empty($this->password)){
                return '<p class="userAuthFailed">Enter Your Email and Password</p>';
            }
            else{
                return $this->userlogin();
            }
        }
        public function userlogin(){
            $query = $this->Connection->prepare(
                "SELECT *  FROM " . $this->login . "  WHERE `gtm-admin-email` = :em AND `gtm-admin-password` = :pass"
            );
            $query->execute(array("em" => $this->email, "pass" => $this->password));
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $this->Connection = null; //connection closure
            if($result != ""){
                if($result[3] == 0){
                    $_SESSION['gtm_admin_email_temp'] = $this->email;
                    header('Location: changePassword.php');
                }
                elseif($result[4] == 0){
                    return '<p class="userAuthFailed">Admin Account have been suspended. Contact the Administrator</p>';
                }
                else{
                    $_SESSION['gtm_admin_email'] = $this->email;
                    header('Location: dashboard.php');
                }
            }
            else{
                return '<p class="userAuthFailed">Admin Authentical Failed! Check your Email and Password</p>';
            }
        }
        public function allUsers(){
            $query = $this->Connection->prepare(
                "SELECT `ccms-user-fname`, `ccms-user-lname`, `ccms-user-email`, `ccms-auto-no`  FROM " . $this->user . " ORDER BY `ccms-user-fname` ASC"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            
            
            $out = '<div class="row table-responsive">'
                    .'<table class="table table-borderedtable-sm" style="background-color:#fff">'
                    .'<thead>'
                        .'<tr>'
                            .'<th scope="col">Sn</th>'
                            .'<th scope="col">Firstname</th>'
                            .'<th scope="col">Lastname</th>'
                            .'<th scope="col">Email</th>'
                            .'<th scope="col">&nbsp;</th>'
                        .'</tr>'
                    .'</thead>'
                    .'<tbody>';
            $count = 1;
            while($result = $query->fetch()){
                $out .='<tr>'
                        .'<th scope="row tableText">'.$count.'</th>'
                        .'<td>'.$result[0].'</td>'
                        .'<td>'.$result[1].'</td>'
                        .'<td>'.$result[2].'</td>'
                        .'<td>'
                            .'<a href="editUserProfile.php?userid='.$result[3].'"><button type="button" class="butt2 view">View More</button></a>'
                            .'<button type="button" class="butt2 suspend" data-id='.$result[2].' data-toggle="modal" data-target="#suspend">Suspend</button>'
                            .'<button type="button" class="butt2 reactivate" data-id='.$result[2].' data-toggle="modal" data-target="#reactivate">Reactivate</button>'
                            .'<button type="button" class="butt2 delete" data-id='.$result[2].' data-toggle="modal" data-target="#delete">Delete</button>'                                 
                        .'</td>'
                    .'</tr>';
                $count++;
            }
            $out .='</tbody>'
                    .'</table>'
                    .'</div>';
            
                    $this->Connection = null; //connection closure
            return $out;
        }
        public function userCategory($cat){
            if($cat == 1){
                return 'Administration';
            }
            else{
                return 'Teacher';
            }
        }
        public function viewUser($no){
            $query = $this->Connection->prepare(
                "SELECT p.`ccms-user-email`, p.`ccms-user-fname`, p.`ccms-user-lname`, p.`ccms-user-gender`, p.`ccms-user-phone`,
                a.`ccms-user-address`, pa.`ccms-user-pastor`, nc.`ccms-user-ncaddress`, l.`ccms-user-level`, l.`ccms-user-status`,
                l.`ccms-user-act-status`
                FROM " . $this->user . " p
                INNER JOIN ". $this->useradd ." a ON p.`ccms-user-email` = a.`ccms-user-email`
                INNER JOIN ". $this->userpas . " pa ON p.`ccms-user-email` = pa.`ccms-user-email`
                INNER JOIN ". $this->usernca ." nc ON p.`ccms-user-email` = nc.`ccms-user-email`
                INNER JOIN ". $this->login ." l ON p.`ccms-user-email` = l.`ccms-user-email`
                WHERE p.`ccms-auto-no`=:no"
            );
            $query->execute(array('no'=>$no));
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $this->Connection = null; //connection closure
            $out='<div class="row editProfileHeader">'
                    .'<div class="col-md-12 dashtext"><i class="glyphicon glyphicon-user ispace"></i>User Profile</div>'
                .'</div>'
                .'<div class="row mymodalrow rowBg">'
                    .'<div class="col-md-4 mymodaltitle1">'
                    .'User Category'
                    .'</div>'
                    .'<div class="col-md-8 ">'.$this->userCat($result[8])
                    .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm userCat"" data-id='.$result[0].' data-toggle="modal" data-target="#userCat">Edit</button> </div>'
                .'</div>'
                .'<div class="row mymodalrow rowBg">'
                    .'<div class="col-md-4 mymodaltitle1">'
                    .'Email'
                    .'</div>'
                    .'<div class="col-md-8">'.$result[0]
                    .'</div>'
                  .'</div>'
                  .'<div class="row mymodalrow rowBg">'
                    .'<div class="col-md-4 mymodaltitle1">'
                    .'Firstname'
                    .'</div>'
                    .'<div class="col-md-8">'.$result[1]
                    .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm fname"" data-id='.$result[0].' data-toggle="modal" data-target="#fname">Edit</button></div>'
                  .'</div>'
                  .'<div class="row mymodalrow rowBg">'
                    .'<div class="col-md-4 mymodaltitle1">'
                    .'Lastname'
                    .'</div>'
                    .'<div class="col-md-8">'.$result[2]
                    .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm lname"" data-id='.$result[0].' data-toggle="modal" data-target="#lname">Edit</button></div>'
                  .'</div>'
                  .'<div class="row mymodalrow rowBg">'
                  .'<div class="col-md-4 mymodaltitle1">'
                  .'Gender'
                  .'</div>'
                  .'<div class="col-md-8">'.$result[3]
                  .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm gender"" data-id='.$result[0].' data-toggle="modal" data-target="#gender">Edit</button></div>'
                .'</div>'
                .'<div class="row mymodalrow rowBg">'
                    .'<div class="col-md-4 mymodaltitle1">'
                    .'Phone'
                    .'</div>'
                    .'<div class="col-md-8">'.$result[4]
                    .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm phone"" data-id='.$result[0].' data-toggle="modal" data-target="#phone">Edit</button></div>'
                .'</div>'
                .'<div class="row mymodalrow rowBg">'
                .'<div class="col-md-4 mymodaltitle1">'
                .'Residential Address'
                .'</div>'
                .'<div class="col-md-8">'.$result[5]
                .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm raddress"" data-id='.$result[0].' data-toggle="modal" data-target="#raddress">Edit</button></div>'
                .'</div>'
                .'<div class="row mymodalrow rowBg">'
                .'<div class="col-md-4 mymodaltitle1">'
                .'NF Pastor'
                .'</div>'
                .'<div class="col-md-8">'.$result[6]
                .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm nfpastor"" data-id='.$result[0].' data-toggle="modal" data-target="#nfpastor">Edit</button></div>'
              .'</div>'
              .'<div class="row mymodalrow rowBg">'
                .'<div class="col-md-4 mymodaltitle1">'
                .'NF Address'
                .'</div>'
                .'<div class="col-md-8">'.$result[7]
                .'&nbsp;&nbsp;<button type="button" class="btn btn-link btn-sm nfaddress"" data-id='.$result[0].' data-toggle="modal" data-target="#nfaddress">Edit</button></div>'
              .'</div>'
              .'<div class="row mymodalrow rowBg">'
                .'<div class="col-md-4 mymodaltitle1">'
                .'Acount Status'
                .'</div>'
                .'<div class="col-md-8">'.$this->acctStatus($result[9])
                .'</div>'
              .'</div>'
              .'<div class="row mymodalrow rowBg">'
                .'<div class="col-md-4 mymodaltitle1">'
                .'Acount Confirmation Status'
                .'</div>'
                .'<div class="col-md-8">'.$this->acctConStatus($result[10])
                .'</div>'
              .'</div>';
            return $out;
        }
        public function userCat($c){
            if($c == 1){
                return 'Administrator';
            }
            elseif($c == 2){
                return 'Teacher';
            }
            else{

            }
        }
        public function acctStatus($c){
            if($c == 1){
                return 'Active';
            }
            elseif($c == 0){
                return 'Suspended';
            }
            else{

            }
        }
        public function acctConStatus($c){
            if($c == 1){
                return 'Account Confirmed';
            }
            elseif($c == 0){
                return 'Account Not Confirmed';
            }
            else{

            }
        }
        public function susConfirm($e){
            $out = '<div class="row susmodalrow">'
                    .'<div class="col-md-12 susmodaltext">Are you sure you want to suspend ' .$e. ' account?</div>'
                    .'</div>'
                    ;

            return $out;
        }
        public function susResult($e){
            $out = '<div class="row susmodalrow">'
                    .'<div class="col-md-12 susmodaltext">' .$e. ' account suspended</div>'
                    .'</div>'
                    ;

            return $out;
        }
        public function getCurrentYear(){
            $query = $this->Connection->prepare(
                "SELECT `ccms-year` FROM " . $this->currentYear. "WHERE `ccms-current`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $this->Connection = null; //connection closure
            if($result != 0){
                return $result[0];
            }
            else{
                return 'Not Set';
            }
        }
        public function getCurrentYear1(){
            $query = $this->Connection->prepare(
                "SELECT `ccms-year` FROM " . $this->currentYear. "WHERE `ccms-current`=1"
            );
            $query->execute();
            /*Fetch all of the remaining rows in the result set*/
            $result = $query->fetch();
            $this->Connection = null; //connection closure
            if($result != 0){
                return 'Are you sure you want to close '.$result[0].'?
                <br><button type="button" class="butt2 closeYear" data-id="1">Continue</button>';
            }
            else{
                return 'Current Year Closed Already';
            }
        }
    }