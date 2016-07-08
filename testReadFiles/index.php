<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lenovo
 * Date: 2/11/15
 * Time: 6:04 PM
 * To change this template use File | Settings | File Templates.
 */
echo '<script type="text/javascript" src="jwplayer/jwplayer.js"></script>';
echo '<script type="text/javascript">jwplayer.key="F6FBnoLfhOjb4Ua7N9oFdjQWtj+YlDlTZ/f9xA=="</script>';
echo '
<div id="myElement">Loading the player...</div>

<script type="text/javascript">
    jwplayer("myElement").setup({
        file: "mp3/92.mp3",
        image: "53a7f8b3.png"
    });
</script>';