<?php 
@$con=mysql_connect("localhost","root",""); // connect to server
mysql_select_db("cu1",$con); // selects the db
echo "<center><b> Record Store In Database</b></center>";
 
 $query=mysql_query("SELECT * FROM test"); 
 
 echo "<table border cellpadding=3 align='center'>"; 
 echo "<tr>"; 
 echo "<th>Name</th><th>Email</th><th>Comment</th></tr>";
 
 while($info=mysql_fetch_array($query)) //retrieves value from the database table.
 { 
 echo "<tr>";
 echo "<td>".$info['name']."</td><td>".$info['email']."</td><td>".$info['comment']."</td></tr>";
 } 
	Print "</table>"; 

?>
<html>
<head>

</head>
<body style="background-image:url(1%20(2).jpg)">
</body>
</html>