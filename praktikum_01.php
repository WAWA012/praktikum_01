<?php
$arrayData = array(
    "Nama" => "Jihan",
    "Usia" => 20,
    "Moisturizer" => array("G2G", "Azarine", "Viva"),
    "Sunscreen" => array("Azarine", "Skin Aqua", "Wardah"),
    "Lipbalm" => array("Lip Ice", "Sebamed", "Buttered")
);

$jsonString = json_encode($arrayData);
echo "Hasil JSON Encode: \n";
echo $jsonString . "\n\n";

$phpObject = json_decode($jsonString);
echo "Mengakses nilai dari PHP Object:\n";
echo "Nama: " . $phpObject->Nama . "\n";
echo "Usia: " . $phpObject->Usia . "\n";
echo "Moisturizer: " . implode(", ", $phpObject->Moisturizer) . "\n";
echo "Sunscreen: " . implode(", ", $phpObject->Sunscreen) . "\n";
echo "Lipbalm: " . implode(", ", $phpObject->Lipbalm) . "\n\n";

$phpArray = json_decode($jsonString, true);
echo "Mengakses nilai dari PHP Array:\n";
echo "Nama: " . $phpArray['Nama'] . "\n";
echo "Usia: " . $phpArray['Usia'] . "\n";
echo "Moisturizer: " . implode(", ", $phpArray['Moisturizer']) . "\n";
echo "Sunscreen: " . implode(", ", $phpArray['Sunscreen']) . "\n";
echo "Lipbalm: " . implode(", ", $phpArray['Lipbalm']) . "\n";
?>
