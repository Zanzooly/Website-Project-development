// id="R11"

var today = new Date();
var dateday = String(today.getDate()).padStart(2, '0');
var datemonth = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var dateyear = today.getFullYear();
var daywords = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var monthwords = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var thissday = daywords[ today.getDay() ];
var thissmonth = monthwords[ today.getMonth() ];
document.getElementById("MonthTitleData").innerHTML = thissmonth;
//document.getElementById("dev1").innerHTML = thissmonth + thissday;
//document.getElementById("dev2").innerHTML = datemonth + dateday + dateyear;

//if thissday
