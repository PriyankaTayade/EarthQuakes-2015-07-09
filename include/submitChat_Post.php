<?php
  $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
  
    mysql_select_db("earthquake",$con); 
 

	$name=$_COOKIE["username"];
	$query = "SELECT COUNT(*) as count FROM chat";
	$queryFinal1=mysql_query($query,$con);
	$result1=mysql_fetch_array($queryFinal1);
	$srno=$result1['count'];
	$srno=$srno+1;
	$sql="INSERT INTO chat (chat_id,name,msg,time)
	VALUES
	('$srno','$name','$chat',CURRENT_TIMESTAMP)";
	echo $srno;
?>