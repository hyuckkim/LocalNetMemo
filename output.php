<?php
//일반적인 파일 읽기 사용 예
$file_handle = fopen('file.txt', "r");

    while (!feof($file_handle)) {

    $line_of_text = fgets($file_handle);
    echo $line_of_text;
    }

fclose($file_handle);

?>
