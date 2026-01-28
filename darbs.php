<?php

// $fruits = array("Abols", "banans", "kiriss", "mandeles");
// echo $fruits[1];


// $ages = array("Alise"=>30, "Bobs"=>25, "Carlijs"=>35);
// echo $ages["Bobs"];


// foreach ($students as $x => $y) {
    //   echo "$x: $y <br>";
    // }
    
    // echo $students["Vārds:"];
    
    // for($i = 0; $i < count($students); $i++) {
        //     echo $students[$i];
        // }
        $students = array(
           array("Vārds:"=>"Džons", "Vecums:"=>20, "Atzimes:"=>[90,85,88]),
            array("Vārds:"=>"Dzena", "Vecums:"=>22, "Atzimes:"=>[92,80,84]),
            array("Vārds:"=>"Džo", "Vecums:"=>21, "Atzimes:"=>[78,85,90]),
        );

        $sum = 0;
foreach($students as $person) 
    {
        foreach($person["Atzimes:"] as $grade)

            $sum = $sum + $grade;
    }
    $avg = $sum / 6;
    echo $avg;
// echo $students[1]["Vecums:"][0];