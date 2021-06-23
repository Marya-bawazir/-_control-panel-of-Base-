<html>
<body>

<?php
$connection= new mysqli("localhost","root" ,"","robot");
$stmt = $connection->prepare("select * from Directions ");
$stmt -> execute();


$result = $stmt-> get_result();

while($row =$result-> fetch_assoc()){


echo  $row["Left"] ."</br>" ;


}

?>


</body>

</html>