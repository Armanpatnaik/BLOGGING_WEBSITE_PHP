<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       nav{
            background-color: rgb(0,0,0);
            padding-right: 0.5px;
            padding: 0.5px;
            border-radius:7px;
}

        .sec, .subscribec, .head, .wow, .post, .search, .end, .logout,.login {
                list-style-type: none;
                margin: 0;
                float: left;
            }
            .signin{
                list-style-type: none;
                margin-left:15px;  
            }
            
            .signout {
                margin-left:0.6cm;  
            }
            .navdiv{
                height: 50px;
                
            }
            .head{
                    padding-left: 550px;
                    padding-right: 115px;
                    font-size: 40px;
                    color: white;
                }
            .subscribec{
                margin-left: 10px;
            }
            .postbutton{
                padding: 1px;
                margin-left:1cm;
            }
            .signup{
                padding: 1px;
                margin-left:0.6cm;
            }
            .subscribeb{
                padding: 1px;
                border: 1px solid;
                border-radius:4px;
            }
            .postbutton, .signup, .signin, .signout, .signinhome{
                border-width: 1px;
                border-radius:4px;
            }

            .input-container{
                width: 150px;
                height: 25px;
                border: 1px solid #a9a9a9;
                display: inline-block;
                border-radius: 8px;
                margin-left: 3cm;
                padding-top: 5px;
                padding-right: 0;
            }
            .input-container input:focus, .input-container input:active {
                outline: none;
            }
            .input-container input {
                width: 80%;
                border: none;
                background-color:rgb(0,0,0);
                padding:3px;
            }

            .input-container button {
                border: 1px;
                background-color: rgb(0,0,0);
            }

    </style>
</head>
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){ 
    $loggedin = true;
}
else{
    $loggedin = false;
}    
echo'<body>
<nav class="navbar">
    <div class="navdiv">
     <ul>
         <li class="subscribec"><button class="subscribeb" style="height: 30px;width: 80px;">subscribe</button></li>
         <li class="head"><b><div class="head1">Web Test</div></b></li>
         <li class= "wow">
        <div class="input-container">
            <input type="search" placeholder ="  search"class="input-field"/>
            <button class="input-button"><img src="search.png" alt="" width="15px"></button>
        </div></li>
         <li class="post"><a href="form.php"><button class="postbutton" style="height: 30px;width: 80px;">post</button></a></li>';
         if(!$loggedin){echo'
         <li class="end" ><a href="regirstration.php"><button class="signup" type="submit"  style="height: 30px;width: 80px;" >sign up</button></a></li>
         <li class="login" ><a href="login.php"><button class="signin" type="submit"  style="height: 30px;width: 80px;" >sign in</button></a></li>';
        }
         if($loggedin){echo'
            <li class="logout" ><a href="logout.php"><button class="signout" type="submit"  style="height: 30px;width: 80px; " data-toggle="tooltip" data-placement="top" onclick="javascript: return confirm(`Do you want to logout ?`);"" >log out</button></a></li>
            <li class="logout" ><a href="prject.php"><button class="signout" type="submit"  style="height: 30px;width: 80px;" >Home</button></a></li>';
         }
         echo'
     </ul>
    </div>
</nav> 
</body>';
?>

