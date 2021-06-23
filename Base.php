


<html>  
<body>

<TABLE  WIDTH=1400 Background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS26zdBztpXkS8zPU6DuvembMqpZE_avTCBGg&usqp=CAU">
		<TR>
			<TD ALIGN=center>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
body {
  font-family: "Sofia", sans-serif;
 font-size:30;text-align:center;
  background-color: #9999ff;
}
</style>

<h1>
					<font size="8" face="sofia" color="Black" <br><br><br><br> <br><br> </TD></TR></TABLE></center></h1>
					<h1>Control panel of the Base</h1>
					
					<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="robot";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

?>
<hr>
 
<form  action=Forward.php method="post">
<input type="submit"  name="forwatd" value=" Forward">
</form>

<form  action=Right.php method="post">
<input type="submit"  name="Right" value=" Right">
</form>

<form  action=Left.php method="post">
<input type="submit"  name="Left" value=" Left">
</form>

<form  action=Stop.php method="post">
<input type="submit"  name="Left" value=" Stop">
</form>

<form  action=Backward.php method="post">
<input type="submit"  name="Left" value=" Backward">
</form>

</body>
</html>>