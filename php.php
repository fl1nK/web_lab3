<?php

$name = $_GET["name"];
$arr = explode(",", $name);
$length = count($arr);

$img = $_GET["img"];
$arrimg = explode(",", $img);
$lengthimg = count($arrimg);


$txt = '{"name":[';
for ($i = 0; $i < $length - 1; $i++) {
   $txt = $txt . '"' . $arr[$i] . '",';
}
$txt = $txt . '"' . $arr[$length - 1] . '"],"img":[';

for ($i = 0; $i < $lengthimg - 1; $i++) {
   $txt = $txt . '"' . $arrimg[$i] . '",';
}
$txt = $txt . '"' . $arrimg[$lengthimg - 1] . '"]}';
$myfile = fopen("ЛР3/content.json", "w");
fwrite($myfile, $txt);
