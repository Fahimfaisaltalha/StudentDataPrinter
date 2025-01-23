<?php
$allStudentsInfo=[
    ["Name"=>"Fahim Faisal Talha", "ID"=> 1,  "Age"=>24, "CGPA"=>"3.82"],
    ["Name"=>"Md Soroar Jahan",    "ID"=> 2,  "Age"=>26, "CGPA"=>"3.63"],
    ["Name"=>"Mujahidul Islam",    "ID"=> 3,  "Age"=>25, "CGPA"=>"3.58"],
    ["Name"=>"Nafiul Isam",        "ID"=> 4,  "Age"=>24, "CGPA"=>"3.02"],
    ["Name"=>"Farhan Mahamud ",    "ID"=> 5,  "Age"=>22, "CGPA"=>"3.42"],
    ["Name"=>"Abdul Aziz Zisan",   "ID"=> 6,  "Age"=>23, "CGPA"=>"3.52"],
    ["Name"=>"Md Sohag",           "ID"=> 7,  "Age"=>23, "CGPA"=>"3.32"],
    ["Name"=>"Tanvir Islam",       "ID"=>12,  "Age"=>25, "CGPA"=>"3.50"],
    ["Name"=>"Jobayer ",           "ID"=> 11, "Age"=>24, "CGPA"=>"3.22"],
    ["Name"=>"Ashif Mahamud",      "ID"=>8,   "Age"=>26, "CGPA"=>"3.32"],
    ["Name"=>"Tuhin",              "ID"=> 9,  "Age"=>23, "CGPA"=>"3.12"],
    ["Name"=>"Farhan Tanvir",      "ID"=> 10, "Age"=>25, "CGPA"=>"3.12"]
];
foreach($allStudentsInfo as $studentsInfo){
    foreach($studentsInfo as $key=>$value){
        echo "$key : $value"."\t";
    }
    echo "\n";
}
 
?>