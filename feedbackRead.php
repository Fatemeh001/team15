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
$sql = "select * from marika_feedback";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    echo "<table class = 'table'>
        <tr>
        <th>E-mail</th>
        <th>Rating</th>
        <th>Feedback Text</th>
        </tr>";

    while($row = $result -> fetch_assoc()){
    echo "
        <tr>
        <th>$row[email]</th>
        <th>$row[rating]</th>
        <th>$row[feedbackText]</th>
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