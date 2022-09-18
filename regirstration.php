<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regirstration</title>
    <style>
        body{
            background-image: url(12345.jpg);
        }
        .container{
            display: flex;
            justify-content: center;
            height: 730px;
        }
        form .regirstration{
            width: 14.5cm;
            height: 16.5cm;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 40px;
            right: 430px;
            padding: 0px 30px 30px;
        }
        label{
            color: rgb(255, 255, 255);
        }
        .regirstration div input[type=text]{
            height: 30px;
            width: 100%;
            padding-left: 10px;
            border: 1px solid lightgray;
            border-radius: 5px;
            
        }
        .regirstration div input[type=password]{
            height: 30px;
            width: 100%;
            padding-left: 10px;
            border: 1px solid lightgray;
            border-radius: 5px;
        }
        .regirstration div input[type=email]{
            height: 30px;
            width: 100%;
            padding-left: 10px;
            border: 1px solid lightgray;
            border-radius: 5px;
        }
        h2{
            color: white;
            text-align: center;
            font-size: 35px;
            font-weight: 600;
            
        }
        h5{
            color: white;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            margin-top: 0%;
            
        }
        .regirstration div{
            height:45px;
            width: 100%;
            margin: 20px 0;
        }
        form .btn{
            margin: 30px 0;
            margin-top: 40px;
            height: 40px;
            width: 50%;
            position: relative;
            left: 140px;
            
    
        }
        form .btn button{
            height: 100%;
            width: 100%;
            border-radius: 9px;
            background-color: rgba(5, 56, 224, 0.582);
            color: white;
            font-size: 18px;
        }
        label{
            font-size: 18px;
        }
        a{
            color: rgb(16, 237, 245);
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
            $gender = $_POST['gender'];
            $company = $_POST['company_name'];
            $address = $_POST['address_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirm_password'];
            $exists="SELECT * FROM  `regirstration` WHERE name = '$name'";
            $result=mysqli_query($conn ,$exists);
            $numofexistrows = mysqli_num_rows($result);
            if(empty($name)||empty($gender)||empty($company)||empty($address)||empty($email)||empty($password)||empty($confirmpassword)){
                echo'<div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
                <strong>all fields are required to fill</strong>.
              </div>';
            }
            else{
            if($numofexistrows > 0){
                echo'<div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
                <strong>username!</strong> already exists.
              </div>';
            }
            else{
            if($password==$confirmpassword){
            
                $sql = "INSERT INTO `regirstration` (`name`, `gender`, `company_name`, `address`, `email`, `password`) VALUES ('$name', '$gender', '$company', '$address', '$email', '$password')";
                $result = mysqli_query($conn ,$sql);
                if($result){
                    echo"inserted succesfully<br>";
                    header("location:prject.php");
                }
            }
                else{
                    echo'<div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
                    <strong>password!</strong> dont match please enter password correctly</div>';
                        }
                    }
                }
            }
    ?>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="regirstration">
                <div class="head">
                    <h2>REGISTER</h2>
                </div>
                <div class="cname">
                    <label for="name">NAME :</label>
                    <input type="text" name="name" class="username" id="name">
                </div>
                <div class="cgender" style="height: 30px; margin-top: 40px;">
                    <label for="gender" >GENDER :</label>
                    <label for="male" >MALE</label>
                    <input type="radio" id="male" value="male" name="gender" class="gender_male" >
                    <label for="female" >FEMALE</label>
                    <input type="radio" id="female" value="female" name="gender" class="gender_female" >
                    <label for="other" >OTHER</label>
                    <input type="radio" id="other" value="other" name="gender" class="gender_other" >
                </div>
                <div class="ccompany">
                    <label for="compname">COMPANY NAME :</label>
                    <input type="text" name="company_name" class="companyname" id="compname">
                </div>
                <div class="caddress">
                    <label for="addressname">ADDRESS :</label>
                    <input type="text" name="address_name" class="useraddress" id="addressname">
                </div>
                <div class="cemailid">
                    <label for="email">EMIAL ID :</label>
                    <input type="email" name="email" class="username" id="email">
                </div>
                <div class="cpassword">
                    <label for="password">PASSWORD :</label>
                    <input type="password" name="password" class="userpassword" id="password">
                </div>
                <div class="cconfirm_password">
                    <label for="confpassword">CONFIRM PASSWORD :</label>
                    <input type="password" name="confirm_password" class="confirmpassword" id="confpassword">
                </div>
                <div class="btn">
                    <button type="submit">sign up</button>
                    <h5>already having account <a href="login.php">log in</a></h5>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>