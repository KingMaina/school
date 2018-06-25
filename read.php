<?php 
$servername="localhost";
$username ="root";
$password="";
// under database name write the name of your database
$mydatabase="school";
$connection=mysqli_connect($servername,$username,$password,$mydatabase);
// check connection
if (mysqli_connect_errno()) {
	# code...
echo "Failed to connect to MySQL: " .mysql_connect_error();
}
$result=mysqli_query($connection,"SELECT * from scores");
echo "<table>
		<tr>
			<th>Username</th>
			<th>English</th>
			<th>Kiswahili</th>
			<th>Sciences</th>
			<th>History</th>
			<th>Geography</th>
		</tr>";
while($row=mysqli_fetch_assoc($result))
	extract($row);
{
	echo "<tr>";
	echo "<td> " .$username ."</td>";
	echo "<td> " .$English."</td>";
	echo "<td> " .$Kiswahili ."</td>";
	echo "<td> " .$Sciences ."</td>";
	echo "<td> " .$History ."</td>";
	echo "<td> " .$Geography ."</td>";
	echo "</tr>";
}
echo "</table>";
	mysqli_close($connection);

 ?>