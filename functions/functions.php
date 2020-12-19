<?php
DEFINE("ROOT_URL" ,"index.php" );
require ("database/database.php");     
$title = $_POST['title'];
$content =    $_POST['post_content'];

    if(isset($_POST['submit'])){
        if(!empty($title) && !empty($content)){
               
           $query = "INSERT INTO posts(post_title , post) VALUES('$title','$content')"; 
        
    $sql = mysqli_query($conn,$query);
    if($sql){
        //success
        echo '<h3 class="alert-success" style="background: transparent;">sucessful upload</h3> <br>';
        header("location: index.php");
        return true;
    }else{
        //not saved
        echo '<h1 class="alert-danger" >system failure</h1>';
        return false;
    }
    }else{
        //do nothing
    }
                return true;
            }else{
                return false;
            }
            
   
   
      



?>