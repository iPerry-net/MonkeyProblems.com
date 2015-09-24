<?php

// Variables for connecting to your database

$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

$connect = mysqli_connect($hostname, $username, $password, $dbname);
$sql = "SELECT * FROM $usertable where coachUse = '0'";

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
  
    if ($result = mysqli_query($connect, $sql))
      {

        // Return the number of rows
        $rowcount = mysqli_num_rows($result);
        printf($rowcount);

        // Free result set
        mysqli_free_result($result);

      }
    }

mysqli_close($connect);

?>