<?php

//Variables for connecting to your database
//These variable values come from your hosting account
$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

//SQL Fields for JSON
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
$selectQuery = "SELECT * FROM $usertable";
$selectResult = mysql_query($selectQuery);

//Find and Update the next '0' Status Coach
if ($selectResult) {
  
    while($r = mysql_fetch_array($selectResult)) {
      
        $name = $r["$cNameField"];
        $city = $r["$cCityField"];
        $story = $r["$cStoryField"];
        $statement = $r["$cStatementField"];
        $pic = $r["$cPicField"];
        $status = $r["$cStatusField"];
      
        if ($status < "1") {
            echo "\"$name\",\"$city\",\"$story\",\"$statement\",\"$pic\",\"$status\"<br>";
            echo "UPDATE endTheTrend SET coachUse = '$status' WHERE coachName = '$name';";
              $updateQuery = "UPDATE endTheTrend SET coachUse = '1' WHERE coachName = '$name';";
              $supdateResult = mysql_query($updateQuery);
              $updateResult;
          
            $cPHPArray = array("$name", "$city", "$story", "$statement", "$pic", "$status");

            $cJSONString = json_encode($cPHPArray);
            echo "<br><hr><br>$cJSONString";

            exit();
        }
    }  
    echo "Please Reset the Database";
}

mysqli_close();

?>