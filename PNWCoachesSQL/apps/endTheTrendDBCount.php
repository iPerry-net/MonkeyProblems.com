<?php

// ------------------ Start the PNWDBArray Function

function PNWDBCount() {
  
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
$countResult = mysql_query($selectQuery);

  
  if (mysql_query($selectQuery)) {

      while($r = mysql_fetch_array($countResult)) {

          if ($status = "1") {
            
//                $countResult = mysql_query("UPDATE endTheTrend SET coachUse = '1';");
                $countResult = mysql_query("UPDATE endTheTrend SET coachUse = '1';");
          }
      }
    
      echo "Done";
  }
  
}

PNWDBCount();

mysqli_close();

?>