<?php
$allowedExts = array("zip");
$extension = end(explode(".", $_FILES["file"]["name"]));
if (($_FILES["file"]["type"] == "archive/zip"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("/TXP-MC/mods/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/TXP-MC/mods/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "mods/" . $_FILES["file"]["name"];

$world = "/TXP-MC/mods/" . $_FILES["file"]["name"];
$zip = new ZipArchive;
if ($zip->open($mod) === true)
{
for($i = 0; $i < $zip->numFiles; $i++)
{
$filename = $zip->getNameIndex($i);
        $fileinfo = pathinfo($filename);
 copy("zip://".$mod."#".$filename, "/server/mods/".$fileinfo['basename']);
}
$zip->close();
}

      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>