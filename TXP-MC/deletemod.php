<?php
# recursively remove a mod

$mod = htmlspecialchars($_POST['mod']);
$dir = "/TXP-MC/server/mods/" . $mod . ".zip"
$dir2 = "/TXP-MC/mods/" . $mod . ".zip"

    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir);

 foreach(glob($dir2 . '/*') as $file) {
        if(is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir2);

?>