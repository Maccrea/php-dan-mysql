<?php
   header( "Content-type: image/jpeg");
   $image = imagecreate(200,60);
   $white = ImageColorAllocate($image,255,255,255);
  $hitam = ImageColorAllocate($image,000,000,000);
  $hijau = ImageColorAllocate($image,10,200,10);
  ImageFilledRectangle($image,0,0,300,60,$white);
  ImageRectangle($image,10,10,180,50,$hitam);
  ImageFilledRectangle($image,14,20,40,40,$hijau); 
  $text = empty($_GET['text']) ? "CV. CENTRANET" : $_GET['text'];
  ImageString($image,10,50,22,$text,$hijau);
   ImageJPEG($image);
  ImageDestroy($image);
?>
