<?php 

function readMyFile($file) {
    if (file_exists($file)) {
        $handle = fopen($file, 'r');
        $content = fread($handle, filesize($file));
        fclose($handle);
        echo $content;
    } else {
        $handle = fopen($file, 'w');
        $content = 'File not found';
        fwrite($handle, $content);
        fclose($handle);
    }
}

?>