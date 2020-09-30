<?php 


//renomeando e movendo arquivos
$dir1= "folder_01";
$dir2= "folder_02";
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);
	$filename= "READ.txt";

if(!file_exists($dir1.DIRECTORY_SEPARATOR .$filename))
{
	$file =fopen($dir1.DIRECTORY_SEPARATOR.$filename,"w+");

	fwrite($file, date("Y-m-d H:i:s"));
}

rename($dir2.DIRECTORY_SEPARATOR.$filename, $dir1.DIRECTORY_SEPARATOR."novo name.txt");
 ?>