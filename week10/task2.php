<html>
<head>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
<a href="task2.php?maker=all">All</a>
<a href="task2.php?maker=t">Toyota</a>
<a href="task2.php?maker=b">BMW</a>
<p></p>

<?php
$host = 'localhost';
$user='root';
$password = 'root';
$db = 'task10';
$conn = mysqli_connect($host,$user,$password,$db);
$conn_error = mysqli_connect_error();
if ($conn_error != null){
    echo "There is error:<p>  $conn_error </p>";
}
$all="SELECT * FROM `cars`;";
$t="SELECT * FROM `cars` WHERE `maker`='Toyota';";
$b="SELECT * FROM `cars` WHERE `maker`='BMW';";
if($_GET['maker']=="t"){
    $query=$t;
}
elseif($_GET['maker']=='b'){
    $query=$b;
}
else{
    $query=$all;
}
$results = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($results)) {
    echo "<div class='car'>";
    echo "<img src=".$row['url'].">";
    echo "<div class='opis'>";
    echo "<b>".$row['maker']." ".$row['model']."</b>";
    echo "<p>".$row['price']."</p>";
    echo $row['year']." year ";
    echo "</div>";
    echo "</div>";
}
mysqli_close($conn);
?>
</body>
</html>