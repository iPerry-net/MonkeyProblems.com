<?php

// DB Connection Information
$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

// SQL Queries
$connect = mysqli_connect($hostname, $username, $password, $dbname);
$countSQL = "SELECT * FROM $usertable where coachUse = '0'";
$resetSQL = "UPDATE $usertable set coachUse = '0'";
$selectSQL = "SELECT * from $usertable where coachUse = '0'";

// SQL Fields for JSON
$cNameField = "coachName";
$cCityField = "coachCity";
$cStoryField = "coachStory";
$cStatementField = "coachStatement";
$cPicField = "coachPic";
$cStatusField = "coachUse";

// Check Connection

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {

// Gets the Row Count
$rowcount = mysqli_num_rows(mysqli_query($connect, $countSQL));
  
// Reset Database, if Less Than 1

    if ($rowcount < 1) {
      if ($connect->query($resetSQL) === TRUE) {}
      else { echo "Error updating record: " . $connect->error; }
    }

// Generate JSON Echo
  
    if ($JSONecho = $connect->query($selectSQL)) {

      while ($r = mysqli_fetch_array($JSONecho)) {

        $name = $r["$cNameField"];
        $city = $r["$cCityField"];
        $story = $r["$cStoryField"];
        $statement = $r["$cStatementField"];
        $pic = $r["$cPicField"];
        $status = $r["$cStatusField"];

        $updateSQL = "UPDATE $usertable set coachUse = '1' where coachName = '$name'";
        if ($connect->query($updateSQL) === TRUE) {}
      
        $cPHPArray = array("$name", "$city", "$story", "$statement", "$pic", "$status");

        $cJSONString = json_encode($cPHPArray);
        echo "$cJSONString";

      exit();
      
    }
  }
}

mysqli_close($connect);

?>