<?php

/* 
Include all details of database in a function named connect() inside dbcon.php file. 
Then call the function connect() here.
*/

include_once 'dbcon.php';

connect();

$arr = array();

if(isset($_GET['term']))
{
$term = $_GET['term'];

$query2 = "SELECT topic_name FROM topics WHERE topic_name LIKE '%$term%'";
$result2 = mysql_query($query2) 
or die();
			
while($ans = mysql_fetch_row($result2)){

$arr[] = $ans[0];
}

echo json_encode($arr);
}
?>
