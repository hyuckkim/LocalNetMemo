<?php
  if($_POST['url'] != "")
    $newfile = "texts/" . $_POST['url'] . ".txt";
  else
    $newfile = "file.txt";

  file_put_contents($newfile, $_POST['str']);
  echo $_POST['str'];
?>
