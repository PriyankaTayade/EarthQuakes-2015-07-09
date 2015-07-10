<?php
$time=getdate(date("U"));
$second=$time [seconds];
$hr=$time[hours];
$day=$time[weekday];
$yr=$time[year];
$min=$time[hours];
$month=$time[month];
  
  session_start();
  //$euser=$_SESSION['viewer'];
  $chat=$_POST['chat'];
  $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
  
    mysql_select_db("earthquake",$con); 
 
//$query12 = "SELECT email_id,first_name,last_name,filenamee,id FROM reg WHERE email_id='$euser'";
//$queryFinal=mysql_query($query12,$con);
//$result=mysql_fetch_array($queryFinal);
$name=$_COOKIE["username"];


 
 $query = "SELECT COUNT(*) as count FROM chat";
$queryFinal1=mysql_query($query,$con);
$result1=mysql_fetch_array($queryFinal1);
$srno=$result1['count'];
$srno=$srno+1;
$sql="INSERT INTO chat (chat_id,name,msg,time)
VALUES
('$srno','$name','$chat',CURRENT_TIMESTAMP)";
mysql_query($sql,$con);
{
   header( 'Location:mainchat.php' ) ; 
}


?>
