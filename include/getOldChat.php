<?php

//if(isset($_GET['chat_id'])
//{
$con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
  
    mysql_select_db("earthquake",$con); 
	$result = mysql_query("SELECT * FROM chat WHERE chat_id<=".$_GET['chat_id']." ORDER BY chat_id DESC LIMIT 8");
	 $i=0;
	while($row = mysql_fetch_array($result))
	{
		$data[$i]['name']=$row['name'];
		$data[$i]['msg']=$row['msg'];
		$data[$i]['time']=$row['time'];
		$i++;
	}
	echo '<table cellpadding=1 cellspacing=1 border=0 class="."table".">
			<tr>
					<td  onClick="OnScroll()"><div onClick="OnScroll()">up </div></td>
			</tr>';
	for($i=count($data)-1;$i>=0;$i--)
	 {echo "
	 <tr>
	 <td >".$data[$i]['name'] . "</td></tr><tr><td></td>
	 <td width=200 class="."msg".">".$data[$i]['msg']."</td></tr><tr><td></td><td></td>
	 <td class="."fright".">".$data[$i]['time']."</td>
	 </tr>";
	 }
	 echo '</table>';
//}
?>