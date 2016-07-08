<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lenovo
 * Date: 2/11/15
 * Time: 11:35 AM
 * To change this template use File | Settings | File Templates.
 */

echo '<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="F6FBnoLfhOjb4Ua7N9oFdjQWtj+YlDlTZ/f9xA=="</script>';
$dirMp3='mp3/';

//echo '<audio controls> <source src="'.$dirMp3.'92.mp3" type="audio/mpeg">Your browser does not support the audio element.
//</audio>';

$file=$dirMp3.'92.mp3';
chmod($dirMp3,0775);
chmod($file,0775);
$myfile = fopen($file, "r") or die("Unable to open file!");
$src=fread($myfile,filesize($file));
fclose($myfile);

chmod($file,0664);
chmod($dirMp3,0664);
echo '<div id="myElement">Loading the player...</div>';
echo '<script type="text/javascript">
     jwplayer("myElement").setup({
        file: "mp3/92.mp3",
        image: "53a7f8b3.png"
    });
</script>';