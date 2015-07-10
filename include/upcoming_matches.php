<?php
$con = mysql_connect("localhost","root","");
	if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
  
    mysql_select_db("earthquake",$con); 
	$query = "SELECT * FROM games WHERE DAY >= CURRENT_TIMESTAMP ";
	$queryFinal1=mysql_query($query,$con);
	$i=0;
	while($row = mysql_fetch_array($queryFinal1))
	{
	 $data[$i]['ID'] = $row['ID'];
	 $data[$i]['Day'] = $row['Day'];
	 $data[$i]['Win/Lost'] = $row['Win/Lost'];
	 $data[$i]['Score'] = $row['Score'];
	 $i++;
	}
	echo json_encode($data);

?>