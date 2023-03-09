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

    .total-feedback{
    font-size: 24px;
    margin: 0 auto;
    margin-left: 100px;
    margin-right: 100px;
    text-align: left;
    }
    </style>
    
<br>
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
    ?><br>

    <div class=total-feedback>
    <?php
    $rowcount = mysqli_num_rows( $result );
    echo "Total number of feedback: " . $rowcount;

    ?>
    </div><br>

<?php
}
else {
    echo "No results";
}
$conn -> close();
?>

<?php include "footer.php" ?>