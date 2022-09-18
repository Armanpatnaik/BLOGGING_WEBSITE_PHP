<?php
include("connection.php");
$id=$_GET['id'];
$title=$_GET['title'];
$description=$_GET['description'];
$query = "SELECT * from `post1` where `slno`= $id"; 
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="form.css" />
</head>
<body>
<h1>Update Record</h1>
<body>
    <div class="container">
        <div class="center">
            <div class="heading">Post Details</div>
            <form action="" method="post">
                <div class="title">
                    <label for="ptitle">Post Title</label>
                    <input type="text" name="title5" id="ptitle" class="post_title" value="<?php echo $title ?>">
                </div>
                <div class="title">
                    <label for="pdescription">Post description</label>
                    <input type="text" name="description5" id="pdescription" class="post_description" value="<?php echo $description ?>">
                </div>
                <div class="btn" style="text-align:center;">
                    <input type="submit" name="submit" value="update" style="background-color: rgb(202, 238, 238);">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$posttitle =$_REQUEST['title5'];
$postdescription =$_REQUEST['description5'];
$update="UPDATE `post1` SET `posttitle`='$posttitle', postdescription='$postdescription' WHERE `post1`.`sl_no`='$id'";
$result= mysqli_query($conn, $update) ;
if($result){
    echo "record updated";
    header('location: prject.php' );
}
else{
    echo"failed to update";
}
}
?>