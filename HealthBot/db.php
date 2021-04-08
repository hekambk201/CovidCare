<?php

$con  = mysqli_connect("localhost","root","","scsj3483");
      $server_time=date("Y-m-d H:i:s");

      $conn= new mysqli();

      if($con){

          echo "Connected";

      }else{

          echo "Failed to Connect";
    }

?>