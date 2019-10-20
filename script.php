<?php


if (count($_POST)){
    $str = json_encode($_POST).PHP_EOL;
    $file = fopen(__DIR__.'/_data.txt', 'a');
    fwrite($file, $str);
}

?>