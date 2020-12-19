<?php
    require '../templating/functions/functions.php';
    $title = " ";
    $content = " ";
    $title = $_POST['title'];
    $content .=    $_POST['post_content'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Add to blog</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-primary well ">
                    <label for="text">Title</label> <br> <br>
            <input type="text" name="title" id="" placeholder="title" required> <br> <br>

            <label> content </label> <br> <br>
            
            <textarea name="post_content" id="" cols="80" rows="20" placeholder="write your post" required></textarea> <br> <br>
            <input type="submit" value="add post" name="submit">
                </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</body>
</html>