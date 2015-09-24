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


// Read in JSON File

$.getJSON( coachJSON, function( json ) {

  console.log("Coach JSON: " + json.coachesJ[ coachNum ].coachUse);
  
  document.getElementById("coachPhoto").src = json.coachesJ[ coachNum ].coachPic;
  document.getElementById("coachCity").innerHTML = json.coachesJ[ coachNum ].coachCity;
  document.getElementById("coachName").innerHTML = json.coachesJ[ coachNum ].coachName;
  document.getElementById("coachStory").innerHTML = json.coachesJ[ coachNum ].coachStory;
  document.getElementById("coachStatement").innerHTML = json.coachesJ[ coachNum ].coachStatement;
  
});


// The Coach Button & While Loop

function theCoach() {

  $.getJSON( coachJSON, function( json ) {

    console.log("Coach Function");
    i = 0;

//    while ((json.coachesJ[ i ].coachUse) > 0) {
//        text += "<br>The Coach has been Used: " + (json.coachesJ[ i ].coachUse);
//        i = i + 1;
//    }

  document.getElementById("coach").innerHTML = "Coach JSON: " + json.coachesJ[ coachNum ].coachUse;
  });
  
};

// The Car Button & While Loop

function theCar() {
  
  console.log("Car Function");
  i = 0;

  while ((car[0][0]) < 10) {
      text += "<br>The Car is: " + (car[1][i]);
      (car[0][0])++;
      i = (car[0][0]);
  }
  document.getElementById("car").innerHTML = text;
};