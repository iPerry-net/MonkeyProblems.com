<?php

// ------------------ Start the PNWDBArray Function

function PNWDBArray() {
  
// Variables for connecting to your database

$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

// SQL Fields for JSON
$cNameField = "coachName";
$cCityField = "coachCity";
$cStoryField = "coachStory";
$cStatementField = "coachStatement";
$cPicField = "coachPic";
$cStatusField = "coachUse";

$cJSONString = "";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
mysql_select_db($dbname);

//Fetching from your database table.
$selectResult = mysql_query("SELECT * FROM $usertable");
  
  if ($selectResult) {

      while($r = mysql_fetch_array($selectResult)) {

          $name = $r["$cNameField"];
          $city = $r["$cCityField"];
          $story = $r["$cStoryField"];
          $statement = $r["$cStatementField"];
          $pic = $r["$cPicField"];
          $status = $r["$cStatusField"];

          if ($status < "1") {
              $updateQuery = "UPDATE $usertable SET coachUse = '1' WHERE coachName = '$name';";
              $updateResult = mysql_query($updateQuery);

              $cPHPArray = array("$name", "$city", "$story", "$statement", "$pic", "$status");

              $cJSONString = json_encode($cPHPArray);
              echo "$cJSONString";

              exit();
          }
      }
    
      echo "reset";
  }
  
}

PNWDBArray();

mysqli_close();

?>