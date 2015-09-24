<?php

// ------------------ Start the PNWDBArray Function

function PNWDBReset() {
  
// Variables for connecting to your database

$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
mysql_select_db($dbname);

//Fetching from your database table.
$selectQuery = "SELECT * FROM $usertable";
$selectResult = mysql_query($selectQuery);

  
  if ($selectResult) {

      while($r = mysql_fetch_array($selectResult)) {

          $name = $r["$cNameField"];
          $city = $r["$cCityField"];
          $story = $r["$cStoryField"];
          $statement = $r["$cStatementField"];
          $pic = $r["$cPicField"];
          $status = $r["$cStatusField"];

          if ($status = "1") {
            
                $updateQuery = "UPDATE endTheTrend SET coachUse = '0';";
                $supdateResult = mysql_query($updateQuery);
                $updateResult;
          }
      }
    
      echo "Done";
  }
  
}

PNWDBReset();

?>