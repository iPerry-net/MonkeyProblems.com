// Global Variables

var coachNum = 1;
var coachIndex = 0;

var i = 0;
var text = "";
var coachJSON = "assets/coaches.json";

var car = [];
  car = [
      [0],
      [0,1,2,3,4,5,6,7,8,9,10,11]
  ];





// The Coach Button & While Loop

function theCoach() {

  $.getJSON( coachJSON, function( json ) {

    console.log("Coach Function");
    i = 0;
    
  document.getElementById("coach").innerHTML = "Coach JSON: " + json.coachesJ[ coachNum ].coachUse;
  });
  
};





// The Car Button & While Loop

function theCar() {
  
  console.log("Car Function");
  i = 0;

  while ((car[0][0]) < 10) {
      text += "<hr>The Car is: " + (car[1][i]);
      (car[0][0])++;
      i = (car[0][0]);
  }
  document.getElementById("car").innerHTML = text;
};