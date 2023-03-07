<?php $title = "Cecile | Read Feedback";
include "header.php"; 
include 'db.php';?>

<style>
    .table{
    margin: 0 auto;
    margin-left: 100px;
    margin-right: 100px;
    text-align: center;
    }
    </style>

<?php
$sql = "select * from konsta_subscribers";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "<table class = 'table'>
        <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>City</th>
        <th>Email</th>
        </tr>";

    while($row = $result -> fetch_assoc()){
    echo "
        <tr>
        <th>$row[first_name]</th>
        <th>$row[last_name]</th>
        <th>$row[city_name]</th>
        <th>$row[email]</th>
        </tr>";
    }
    echo "</table>";
}

else {
    echo "No results";
}
$conn -> close();
?>

<?php include "footer.php" ?>