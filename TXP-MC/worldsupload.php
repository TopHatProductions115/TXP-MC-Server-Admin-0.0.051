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

    if (file_exists("/TXP-MC/worlds/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/TXP-MC/worlds/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "worlds/" . $_FILES["file"]["name"];

$world = "/TXP-MC/worlds/" . $_FILES["file"]["name"];
$zip = new ZipArchive;
if ($zip->open($world) === true)
{
$zip->extractTo("/TXP-MC/server/" . $_FILES["file"]["name"] . "/");
  $zip->close();
  echo 'woot!';
}

else {
  echo 'doh!';
}

      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>