<?php
$user_id=$_GET['id'];
$filenamee=$_GET['filenamee'];

$path = "../aman_sharma/recievedfiles/".$user_id.'/'.$filenamee;
header('Content-Disposition: attachment; filename='.basename($path));
header('Content-Type: image/jpg/jpeg/png/application/txt/text/pdf/octet-stream/jar/java/cpp');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($path));
readfile($path);
?>
