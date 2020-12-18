<?php
require "../database/database.php ";  
$title = $_POST['title'];
$post_content = $_POST['post_content'];
$title .= $_POST['title'];
$post_content .=    $_POST['post_content'];
function insert($title,$post_content){
    if(isset($_POST['submit'])){
        if(!empty($title) && !empty($post_content)){
                return true;
            }else{
                return false;
            }
            
    $query="INSERT INTO posts(post_title , post_description) VALUES('$title','$post_content')"; 
    $sql = mysqli_query("$conn","$query");
    if($sql){
        //success
        echo "<h3>sucessful upload</h3> <br>";
        return true;
    }else{
        //not saved
        echo "<h3>system failure</h3>";

        return false;
    }
    }else{
        //do nothing
    }
   
        
}  

insert($title,$post_content);

?>