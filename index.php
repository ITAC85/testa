<?php
$img = fopen("img.txt", "w");
$data = $_POST['data'];
$data2 = explode("|", $data);
$stuff = "";
foreach($data2 as $dat2) {
    $stuff = $stuff . base64_decode(rawurldecode($dat2)) . "|";
}
fwrite($img, $stuff);
fclose($img);
?>
