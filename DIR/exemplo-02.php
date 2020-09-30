<?php 

$images =scandir("images");
$data =array();

foreach ($images as $img ) 
{
	if(!in_array($img, array(".", "..")))
	{
		$filename= "images".DIRECTORY_SEPARATOR.$img;

		$infor = pathinfo($filename);
		$infor["size"] = filesize($filename);
		$infor["modified"]= date("d/m/Y H:i:s", filemtime($filename));
		$infor["url"]="http://localhost/DIR/". str_replace("\\", "/",$filename);

		array_push($data, $infor);
	}

	
}
echo json_encode($data);
 ?>