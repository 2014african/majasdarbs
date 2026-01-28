<?php

$fruits = array("Abols", "banans", "kiriss", "mandeles");
// echo $fruits[1];


$ages = array("Alise"=>30, "Bobs"=>25, "Carlijs"=>35);
// echo $ages["Bobs"];

$students = array(
    "Vārds:"=>"Džons", "Vecums:"=>20, "Atzimes:"=>[90,85,88],
    "Vārds:"=>"Dzena", "Vecums:"=>22, "Atzimes:"=>[92,80,84],
    "Vārds:"=>"Džo", "Vecums:"=>21, "Atzimes:"=>[78,85,90]
);

foreach ($students as $x => $y) {
  echo "$x: $y <br>";
}

// echo $students["Vārds:"];
?>