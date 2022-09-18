<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(12345.jpg);
        }
        .box{
            width: 400px;
            height: 450px;
            background-color: rgba(0, 8, 8, 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            padding: 0px 30px 30px;
            border-radius: 2px;
            }
            h2{
                font-size: 35px;
                font-weight: 600;
                text-align: center;
                color: white;
            }
            .box div{
                height:45px;
                width: 100%;
                margin: 50px 0;
            }
            .box div input{
                height: 100%;
                width: 100%;
                border-radius: 9px;
            }
            label{
            font-size: 18px;
            color: white;
            }
            form .login{
            margin: 30px 0;
            margin-top: 70px;
            height: 40px;
            width: 50%;
            position: relative;
            left: 100px;
        }
        form .login button{
            height: 100%;
            width: 100%;
            border-radius: 9px;
            background-color: rgba(5, 56, 224, 0.582);
            color: white;
            font-size: 18px;
        }
        h5{
            color: white;
            margin-top: 0%;
        }
        .login h5{
            text-align: center;
            margin-left: 0.5cm;
        }
        a{
            color: turquoise;
        }
        .alert {
                padding: 20px;
                background-color: #f44336;
                color: white;
                }

                .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
                }

                .closebtn:hover {
                color: black;
                }
    </style>
</head>
<?php 
    include'connection.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql="SELECT * from regirstration where name = '$name' AND password='$password'";
        $result=mysqli_query($conn, $sql);
        $numofrows2=mysqli_num_rows($result);
        if($numofrows2 ==1){
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['name'] = $name;
            header("location:welcome.php");
        }
        else{
            echo'<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
            <strong>invalid credentials</strong>.
          </div>';
        }
    }
?>
<body>
    <div class="container">
        <form action="" method = "post">
            <div class="box">
                <div class="head">
                    <h2>LOG IN</h2>
                </div>
                <div class="username">
                    <label for="usernamefor">USER NAME or EMAIL ID : </label>
                    <input type="text, email" id="usernamefor" name="name" class="username_input">
                </div>
                <div class="password">
                    <label for="passwordfor">PASSWORD : </label>
                    <input type="password" class="password_input" name="password" id="passwordfor">
                    <h5><a href="">forget password</a></h5>
                </div>
                <div class="login">
                    <button type="submit">Log In</button>
                    <h5>don't have account <a href="regirstration.php">sign up</a></h5>
                </div>
            </div>
        </form>
    </div>
</body>
</html>