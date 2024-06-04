<?php 
   if(isset($_GET["id"]) && $_GET["id"]){
        include_once("models/Employee.php");
        $empID = $_GET["id"];
      
        $emp = Employee::search($empID);
        $emp->remove();
   }else{
    header("location:index.php");
    die();
   }
?>