$.ajax({ url: 'http://monkey-problems.com/CP300_pnwcoaches/apps/endTheTrendDBCall.php',
 data: {action: 'test'},
 dataType: 'json',
 type: 'post',
 success: function(output) {
   
  var $name = output[0];
  var $city = output[1];
  var $story = output[2];
  var $statement = output[3];
  var $pic = output[4];

    document.getElementById("coachPhoto").src = $pic;
    document.getElementById("coachCity").innerHTML = $city;
    document.getElementById("coachName").innerHTML = $name;
    document.getElementById("coachStory").innerHTML = $story;
    document.getElementById("coachStatement").innerHTML = $statement;
   
    }
 });

