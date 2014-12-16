<?php
# recursively remove a world

$world = htmlspecialchars($_POST['world']);
$dir = "/TXP-MC/worlds/" . $world . ".zip"

    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir);

?>