<?php
DEFINE ("DBNAME","blog");
DEFINE ("DBHOST","localhost");
DEFINE ("DBUSER","root");
DEFINE ("DBPASSWORD","");
$conn = mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);
if($conn){
    // echo "succesful connection to database -->>" .DBNAME;    
    return true;
}else{
    // echo "connection  to database failed";
    return false;
}
?>