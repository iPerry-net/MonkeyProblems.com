<?php

function JSONArray() {
  
$cars = array
  
  (
  array("Tom"),
  array("Frank"),
  array("Bob"),
  array("Andrew")
  );
   
  $cJSONArray = json_encode($cars);
  echo "$cJSONArray";
  
}

JSONArray();

?>