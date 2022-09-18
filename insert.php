<?php
        include'connection.php';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $title = $_POST['title'];
            $description = $_POST['description'];
            
                $sql = "INSERT INTO `post1` (`posttitle`, `postdescription`) VALUES ('$title', '$description')";
                $result = mysqli_query($conn ,$sql);
                if($result){
                    echo"inserted succesfully<br>";
                    header("location:prject.php");
                }
                else{
                    echo"Data not inserted";
                }
            }
    ?> 







