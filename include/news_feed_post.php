<?php

//if(isset($_GET('newsFeed')){
	$con = mysql_connect("localhost","root","");
	if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
  
    mysql_select_db("earthquake",$con); 
	$query = "SELECT * FROM news_feed";
	$queryFinal1=mysql_query($query,$con);
	$i=0;
	while($row = mysql_fetch_array($queryFinal1))
	{
	 $data[$i]['news_id'] = $row['news_id'];
	 $data[$i]['image'] = $row['image'];
	 $data[$i]['title'] = $row['title'];
	 $data[$i]['time'] = $row['time'];
	 $i++;
	}
	echo json_encode($data);
	
//}
?>