<?php
    require_once "model/selectClass.php";
    require_once "model/updatetClass.php";
    $select = new selectClass();
    $update = new updateClass();

    if(isset($_POST['id'])){
        echo $select->viewUser($_POST['id']);
    }