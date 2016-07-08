<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lenovo
 * Date: 2/11/15
 * Time: 11:35 AM
 * To change this template use File | Settings | File Templates.
 */
//include 'html_encoder_1.9.php';
ob_start();header("Content-type: audio/mp3");
$dirMp3='mp3/';

//echo '<audio controls> <source src="'.$dirMp3.'92.mp3" type="audio/mpeg">Your browser does not support the audio element.
//</audio>';
$data1='<div style="width: 480px; height: 270px; opacity: 1; background-color: rgb(0, 0, 0);">';
echo $data1;
$file=$dirMp3.'92.mp3';
echo fopen($file, "rb");
$data=fread($f, 245760);
fclose($f);


$dirMp3='mp3/';

$file=$dirMp3.'92.mp3';


//echo $header ;

echo '</div>';  ;

ob_flush();
//echo $data1;
?>
