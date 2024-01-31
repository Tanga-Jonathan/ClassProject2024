<?php

function hello_World(){
    echo "Functions are cool";
}

hello_World();



function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

// if i want to display salary with commas
  function employeeStatus(){
    $firstna = "Jonah";
    $salary = 1500000;
    $married = true;
    $Commas = number_format($salary);
    echo "First name: $firstna Earns: $Commas monthly Married: $married";
  }
   
  employeeStatus();

 

?>