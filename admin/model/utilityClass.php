<?php
    class utilityClass{
        public function yearList(){
            $cyear = Date("Y");
            $lyear = $cyear - 5;
            $cyear5 = $cyear + 5;
            $list = '<option value="">Select Year</option>';
            while($lyear <= $cyear5){
                $list .='<option value="'.$lyear.'">'.$lyear.'</option>';
                $lyear++;
            }
            return $list;
        }
        public function genDay(){
            $day = 1;
            $list = '<option value="">Select Day</option>';
            while($day <= 31){
                $list .='<option value="'.$day.'">'.$day.'</option>';
                $day++;
            }
            return $list;
        }
        public function genMonth(){
            $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            $list = '<option value="">Select Month</option>';
            $i = 0;
            while($i < count($month)){
                $list .='<option value="'.$month[$i].'">'.$month[$i].'</option>';
                $i++;
            }
            return $list;
        }
        public function genYear(){
            $list = '<option value="">Select Year</option>';
            $end = Date("Y");
            $start = $end - 12;
            while($start <= $end){
                $list .='<option value="'.$start.'">'.$start.'</option>';
                $start++;
            }
            return $list;
        }
    }