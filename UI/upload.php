<?php
    require " ";


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
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="bg-primary">
                    <label for="text">Title</label> <br> <br>
            <input type="text" name="name" id="" placeholder="title"> <br> <br>

            <label> content </label> <br> <br>
            
            <textarea name="message" id="" cols="40" rows="10" placeholder="write your post"></textarea> <br> <br>
            <input type="submit" value="add post" name="submit">
                </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</body>
</html>