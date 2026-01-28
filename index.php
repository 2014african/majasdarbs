<?php

$result = "People: ";


$people = array(
    ["Vārds" => "Jānis", "Vecums" => 20, "E-pasts" => "janis@janis.lv", "Valodas" => "[PHP, Python, Java]"],
    ["Vārds" => "Antra", "Vecums" => 34, "E-pasts" => "antra@antra.com", "Valodas" => "HTML, Javascript, SQL"],
);

for ($i = 0; $i < count($people); $i++) {

    $result .= "Vārds: " . $people[$i]["Vārds"] . ", ";
    $result .= "Vecums: " . $people[$i]["Vecums"] . ", ";
    $result .= "E-pasts: " . $people[$i]["E-pasts"] . ", ";
    $result .= "Valodas: " . $people[$i]["Valodas"];

    // if ($i != count($people) - 1) {
    //     $result .= " | ";
    // }
    foreach($people as $person){
    echo "<ul>".
           "<li>" .
                "<h1>" . $person["Vārds"] . "</h1>" .
                "<p>" . $person["Vecums"] . "</p>".
                "<p>" . $person["E-pasts"] . "</p>".
            "</li>".
         "</ul>".
         "<ul>";
         foreach($person["Valodas"] as $valoda)
        {
         echo "<li>";
         echo $valoda;
         echo "</li>";
        }
        echo "</ul>";
    }
         
}












?>