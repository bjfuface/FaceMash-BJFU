<?php
include("../core.php");
$str = str_replace(' ','+',$_GET['str']);
$key='itissofinehere';
$code = authcode($str,'DECODE', $key);



header("Content-type:image/png");
$filename='../../img/daslkIWLasje/'.$code.'.jpg'; #ԭͼ
list($width,$height)=getimagesize($filename);
$newwidth=110;  //��������ͼ�Ŀ�ȣ������Ǿ������ֵ
$newheight=154; //��������ͼ�ĸ߶ȣ������Ǿ������ֵ
//Load
$thumb=imagecreatetruecolor($newwidth,$newheight);
$source=imagecreatefromjpeg($filename);
//Resize
imagecopyresized($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);
//Output
imagepng($thumb);
imagedestroy($thumb);
?>




