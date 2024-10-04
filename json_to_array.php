<?php
$arrayData = [
    "Nama" => "Jihan Kusumawardhani",
    "Umur" => 20,
    "Sunscreen" => "Azarine, Skin Aqua",
    "Moisturizer Favorit" => "G2G, Azarine",

];

$jsonData = json_encode($arrayData);
echo "Data dalam format JSON:" . $jsonData;
?>