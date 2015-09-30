var worker = null;
var loaded = 0;

function increment() {
    $('#counter').html(loaded+'%');
    $('#drink').css('top', (100-loaded*.9)+'%');
//    if(loaded==25) $('#cubes div:nth-child(1)').fadeIn(100);
//    if(loaded==50) $('#cubes div:nth-child(2)').fadeIn(100);
//    if(loaded==75) $('#cubes div:nth-child(3)').fadeIn(100);
    if(loaded==100) {
        loaded = 0;
        stopLoading();
    }
    else loaded++;    
}

function startLoading() {
    worker = setInterval(increment, 30);
}

function stopLoading() {
    clearInterval(worker);
}

startLoading();