<?php
$connection = mysql_connect("50.112.134.215", "root", "isuck"); 
$db = mysql_select_db("email", $connection); 
if(isset($_GET['email'])){ 

$email = $_GET['email'];

if($email !=''){
//Insert Query of SQL
$query = mysql_query("insert into email_id(email) values ('$email')");
echo = "<p>Sucess</br></p>";
}
else{
echo "<p>Insertion Failed <br/></p>";
}
}
mysql_close($connection); // Closing Connection with Server

header("Location: index.html");
die();

?>