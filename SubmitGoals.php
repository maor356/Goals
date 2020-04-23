<?php

$goal = $_POST['goal'];
$date = $_POST['date'];
$category = $_POST['category'];

echo "Date: " . $date . "<br>";

//Build SQL query using values above

$query = "INSERT INTO goals
    (goal, date, category)
     VALUES (
     '$goal',
     '$date',
     '$category'
     )";

//print query to browser

echo $query."<br>";

$mysqli = new mysqli('localhost', 'root', 'root','goals', 3308);

if(mysqli_connect_errno()) {
    die('Could not connect:'.mysqli_error($mysqli));
}

echo "Connection to mySQL Successful. <br>";

$mysqli->select_db('goals');

echo 'selected the Goals database <br>';

if($result = $mysqli->query($query)) {
    echo "you have successfully entered your new goal into db";
    readfile("index.html");
}
else {
    echo "error entering $goal". $mysqli->error."<br>";
}

$mysqli->close();