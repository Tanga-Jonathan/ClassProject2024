<?php


require_once 'con_to_db.php';

$query = "INSERT INTO clients (UserName, FirstName) VALUES (?, ?)";
$que = $connect->prepare($query);


// bind statement
$val = "Kamajo";
$val2 = "Tanga";

$que->bind_param("ss",$val, $val2);

//execute statement
$que->execute();
if ($que->affected_rows > 0){
    echo "Record entered";
}
else{
    echo "error " . $que->error;
}
$que->close();
$connect->close();

?>







?>