<?php 
//renderizando a imagem em binario
$filename = "a.jpeg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype= $fileinfo->file($filename);
$base64_encode= "data:".$mimetype.";base64,". $base64;

 ?>

 <a href = "<?=$base64encode?>" target="_blank">link para imagem</a>
 <img src="<?=$base64_encode?>">