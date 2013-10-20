<?php

if(isset ($_POST['value']))
{
    
// Connect to MySQL
// Change the username, password and hostname in the function mysql_connect as per your configuration
include_once 'dbcon.php';

connect();

    
    $value=$_POST['value'];
    
        // Create tables
      $query1="CREATE TABLE IF NOT EXISTS topics (
id int(10),
topic_name varchar(100)
)";

        $results1 = mysql_query($query1)
        or die(mysql_error());
    
        
        $query2="insert into topics(topic_name) 
        VALUES('$value')";

        $results2 = mysql_query($query2)
        or die(mysql_error());
    
        if(mysql_affected_rows()>0)
        {
            echo '<br />Update Complete.<br /> Check the suggestions now. <br />Please wait the page shall refresh automatically';
            echo '<br />';            
        }
}
?>
