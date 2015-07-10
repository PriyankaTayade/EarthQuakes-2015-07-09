 <html>
<head>
<style>
.table{ border-width: 1; background-color: white; vertical-align:text-bottom;}
.fright{ float:right;}
.msg{background-color:pink;} 
          
</style>
 <script type="text/javascript">
        function OnScroll () {
		
		alert("this");
		getOldChat(5);
		
           	
        }
		function getOldChat(chat_id) {
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getOldChat.php?chat_id="+chat_id);
  xmlhttp.send();
}
    </script>
</head>
<body bgcolor="white">
<?php
 session_start(); 
  $con = mysql_connect("localhost","root","");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
        
    }    
        mysql_select_db("earthquake",$con); 
 
	 $result = mysql_query("SELECT * FROM chat ORDER BY chat_id DESC LIMIT 8");
	 $i=0;
	 $j=0;
	while($row = mysql_fetch_array($result))
	{
		$data[$i]['name']=$row['name'];
		$data[$i]['msg']=$row['msg'];
		$data[$i]['time']=$row['time'];
		$i++;
	}
	echo '<div id="txtHint" >
			<table cellpadding=1 cellspacing=1 border=0 class="."table".">
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
	 echo '</table>
			</div>';
 ?>
</body>
</html>