<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>
    <h2>Total Post Details</h2>
    <table>
        <thead>
            <tr>
                <th style="padding: 15px; text-align: left; ">sl no</th>
                <th  style="padding: 15px; text-align: left; ">Post Title</th>
                <th  style="padding: 15px; text-align: left; ">Post Description</th>
                <th colspan="2" style="padding: 15px; text-align: left; ">Post setting</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql= "SELECT * FROM `post1`";
                $result=mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){?>

                    <tr>
                        <td ><?php echo $row['sl_no'] ?></td>
                        <td ><?php echo $row['posttitle'] ?></td>
                        <td ><?php echo $row['postdescription'] ?></td>
                        <td ><button><a href="edit.php?id=<?php echo $row['sl_no']?>&title=<?php echo $row['posttitle']?>&description=<?php echo $row['postdescription']?>"data-toggle="tooltip" data-placement="top" onclick="javascript: return confirm('Do you want to edit the this?');">Edit</a></button></td>
                        <td><button><a href="procces.php?id=<?php echo $row['sl_no'];?>" data-toggle="tooltip" data-placement="top" onclick="javascript: return confirm('Do you want to delete the this?');">Delete</a></button></td> 
                    </tr><?php
                }
?>
            
        </tbody>
    </table>
</body>
</html>
