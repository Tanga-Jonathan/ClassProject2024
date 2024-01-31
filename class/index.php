<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$grade = 20;
if ($grade>=80 && $grade <= 100 ){echo "grade A";}
if ($grade > 100){echo "That is not gradable";}
if ($grade >= 74 && $grade <= 80 ){echo "grade B+";}
if ($grade >= 73 && $grade <= 69 ){echo "grade B";}
if ($grade >= 64 && $grade <= 68 ){echo "grade C";}
if ($grade >= 63 && $grade <= 59 ){echo "grade D";}
if ($grade >= 54 && $grade <= 58 ){echo "grade P";}
else {echo "grade F";}
if ($grade < 0){echo "That is not gradable";}
// <!-- how to create functions in php -->
echo "<br>";
function myMessage(){
    echo "I LOVE PHP";
}
myMessage();



echo 58**4;

?>
</body>
</html>