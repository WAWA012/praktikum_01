<?php
$jsnobj = '{"Jihan":20, "Kusuma":21, "Wardhani":22}';

$arr = json_decode($jsnobj, true);

echo $arr['Jihan'] . "<br>";
echo $arr['Kusuma'] . "<br>";
echo $arr['Wardhani'] . "<br>";
?>
