<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        session_start();
        include'navbar.php';
        if(!isset($_SESSION['logedin'])||$_SESSION['logedin']!=true){
            header('login.php');
        }
        
    ?>
<body>
   <h2> welcome- <?php echo$_SESSION['name'];?></h2>
</body>
</html>