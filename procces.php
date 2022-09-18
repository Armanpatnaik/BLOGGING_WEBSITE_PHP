<?php
    include'connection.php';
    $id = $_REQUEST['id'];
    $query = "DELETE FROM `post1` WHERE `sl_no`=$id"; 
    $result = mysqli_query($conn,$query) or die ( mysqli_error());
    header("Location: prject.php"); 

?>