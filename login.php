<?php

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
    
    $ID=$_POST['ID'];
    $password=$_POST['password'];


    $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location: F_Dashboard.php');
        }
     }
          
        else{
            $invalid=1;
        }
  }
  ?>
