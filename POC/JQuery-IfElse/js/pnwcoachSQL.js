$.ajax(
        {url: 'http://monkey-problems.com/POC/JQuery-IfElse/apps/mySQLiArray.php',
        data: {action: 'test'},
        dataType: 'json',
        type: 'post',
         
          success: function(output) {
            var $name = output[0];
            var $city = output[1];
            var $story = output[2];
            var $statement = output[3];
            var $pic = output[4];
            var $status = output[5];

            document.getElementById("coachPhoto").src = $pic;   
            document.getElementById("coachName").innerHTML = $name;   
            document.getElementById("coachStory").innerHTML = $story;   
            document.getElementById("coachStatement").innerHTML = $statement;   
          }
        }
);