<?php 

$conn = new mysqli("localhost","root","root","dbphp7");

	if($conn->connect_error)
		{
			echo "error: ". $conn->connect_error;
		}

$result = $conn->query("select * from tb_usuarios order by deslogin");
$data= array();
while ($row = $result->fetch_assoc())
{
var_dump($row);

array_push($data, $row);
}

echo json_encode($data);




 ?>