<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    
<?php

// fetvh data
require_once "con_to_db.php";
$query = "SELECT * FROM clients";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p> UserName: " . $row ["UserName"] . "</p>";
    }
}

?>
</body>
</html>