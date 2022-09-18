
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<?php
 include'insert.php';
?>
<body>
    <div class="container">
        <div class="center">
            <div class="heading">Post Details</div>
            <form action="" method="post">
                <div class="title">
                    <label for="ptitle">Post Title</label>
                    <input type="text" name="title" id="ptitle" class="post_title">
                </div>
                <div class="title">
                    <label for="pdescription">Post description</label>
                    <input type="text" name="description" id="pdescription" class="post_description">
                </div>
                <div class="btn">
                    <button type="submit" style="background-color: rgb(202, 238, 238);" data-toggle="tooltip" data-placement="top" onclick="javascript: return confirm('confirm to post?');"">submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>