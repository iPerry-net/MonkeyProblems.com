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
$resetResult = mysql_query($selectQuery);

  
  if (mysql_query($selectQuery)) {

      while($r = mysql_fetch_array($resetResult)) {

          if ($status = "1") {
            
                $resetResult = mysql_query("UPDATE endTheTrend SET coachUse = '0';");
          }
      }
    
      echo "Done";
  }
  
}

PNWDBReset();

mysqli_close();

?>