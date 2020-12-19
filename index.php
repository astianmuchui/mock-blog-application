<?php
    require     ("database/database.php");
    $query = "SELECT * FROM posts";
    $result = mysqli_query($conn,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://github.com/IAstian/typewritter/blob/master/type_min.js"></script>
    <title>php blog</title>
</head>
<body>
</form>        
        <?php foreach($posts as $post) :?>
            <div class="bg-primary" style="height: max-content; width: 70%; margin: 20px auto;padding: 20px;">
                <h1><?php echo $post['post_title'];?></h1>
                <p><?php echo $post['post']; ?></p>
                <small>created <?php echo $post['time']; ?></small>
            </div>
        <?php endforeach; ?>  
          



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>