<?php
$allStudentsInfo=[
    ["Name"=>"Fahim Faisal Talha", "ID"=> 1,  "Age"=>24, "CGPA"=>"3.82"]
];
foreach($allStudentsInfo as $studentsInfo){
    foreach($studentsInfo as $key=>$value){
        echo "$key : $value"."\t";
    }
    echo "\n";
}

?>