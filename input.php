<?php
  $newfile = "file.txt";
  file_put_contents($newfile, $_POST['str']);
  echo $_POST['str'];
?>
