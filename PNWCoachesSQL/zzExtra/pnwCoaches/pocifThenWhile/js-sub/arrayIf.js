var i = 0;
var text = "";
var car = [];
car = [
	[0],
	[0,1,2,3,4,5,6,7,8,9,10,11]
];

function theCar() {
    while ((car[0][0]) < 10) {
        text += "<br>The Car is " + (car[1][i]);
        (car[0][0])++;
        i = (car[0][0]);
    }
    document.getElementById("demo").innerHTML = text;
}