<?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="blog2";
        $conn=mysqli_connect($servername, $username, $password, $database);
        if(!$conn){
            die("connection lost due to:".mysqli_connect_error());
        }
?>