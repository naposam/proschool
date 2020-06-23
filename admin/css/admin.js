var time= new Date();
console.log(time.getHours() % 12);
console.log(time.getMinutes());
console.log(time.getSeconds());
//this code is babe

var clock=document.getElementById('clock');
var hexColor=document.getElementById('hex-color');

function hexClock(){
	var time = new Date();
    var hours= (time.getHours() % 12).toString();
    var minutes= time.getMinutes() .toString();
    var Seconds= time.getSeconds() .toString();

    if(hours.length <2){
    	hours = '0' + hours;
    }

    if(minutes.length <2){
    	minutes = '0' + minutes;
    }

    if(Seconds.length <2){
    	Seconds = '0' + Seconds;
    }
    var clockStr = hours + ' : ' + minutes + ' . ' + Seconds;
    var hexColorStr= '#' + hours +minutes +Seconds;

    clock.textContent= clockStr;
    hexColor.textContent= hexColorStr;

    document.body.style.backgroundColor= hexColorStr;

} 
  hexClock();
 setInterval(hexClock, 1000);

 //contact napo for more details how create timer with javascript