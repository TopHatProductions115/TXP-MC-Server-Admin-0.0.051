<?php
 
$files = array();
 
/* open the current directory by opendir */
if ($handle = opendir('.')) {
 
  /* as long as there is another file, read its path and store to $file */
  while (false !== ($file = readdir($handle))) { 
 
    /* do not list '.', '..', or 'index.php' */
    if ($file != "." && $file != ".." && $file != "index.php") { 
 
      $files[] = $file;
 
    }
 
  }
 
  closedir($handle);
 
}
 
asort($files);
 
foreach ($files as $name) {
 
  echo "<a href=\"$name\" alt=\"$name\">$name</a><br /><br /> \n";
 
}
 
?>