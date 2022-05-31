//resources
//


let cal = [];

//found it! Why does this break it? Something is wrong with this it should be back to normal
//var SetDateM = today.getMonth()+1;
//var SetDateY = today.getFullYear();
//var SetDateD = today.getDate();
//var FullDate = SetDateY+'-'+SetDateM+'-'+SetDateD;
var date = new Date();
//var firstDay = new Date(date.getFullYear(), date.getMonth(),1); //Gets Full date and time unneeded rn
//var lastDay = new Date(date.getFullYear(),date.getMonth()+1,0); //Gets Full date and time unneeded rn
new Date().getMonth();

const d = new Date();
d.getMonth() + 1;
d.getDate();
d.getFullYear();
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var DaysThisMonth = getDayInMonth((today.getMonth()+1), today.getFullYear());

//object that holds date and event
function day(number, event) {
  this.date = number;
  this.events = event;
  this.display = function() {
    return this.date + "<br> Events: <br> " + this.events;
  };
}

//adds a new event to a specific day
function addEvent(){
let date = parseInt(document.getElementById('inDate').value);
let event = document.getElementById('inEvent').value;
cal[date - 1].events += event + " ";
}

//regenerates the calendar to display new events (does not affect the array)
function updateCalendar(){
  let days = 31;
  var table = document.getElementById('calendar');
  var j = 0;
  var l = 0;
  table.innerHTML = "";
  var row = table.insertRow(0);
  for (var i = 0; i < days; i++, j++){
    if (j == 6){
      row = table.insertRow(l + 1);
      j = 0;
      l++
    }
    newCell = row.insertCell(j);
    newCell.innerHTML = cal[i].display();
  }
}

//creates the initial calendar and initializes array
function createCalendar(){

  //Getting Current Day Month and Year




              //GET DAYS IN MONTH
  document.getElementById("p1").innerHTML = date;
  document.getElementById("p2").innerHTML = DaysThisMonth;





  //Calandar Creation calendar
  let days = DaysThisMonth;
  var table = document.getElementById('calendar');
  var row = table.insertRow(0);
  var j = 0;
  var l = 0;
  for (var i = 0; i < days; i++, j++){
    cal[i] = new day(i + 1, " "); //creates new days for the array
    if (j == 6){  //creates rows
      row = table.insertRow(l + 1);
      j = 0;
      l++
    }
    newCell = row.insertCell(j); //creates new cells
    newCell.innerHTML = cal[i].display(); //displays the date and events
  }
  document.getElementById('create').disabled = true;
}

var getDaysInMonth = function(month,year) {
  return new Date(year, month, 0).getDate();
}

function GetDayInMonth(month, year) {
  //Getting Current Day Month and Year
  var getDaysInMonth = function(month,year) {
    return new Date(year, month, 0).getDate();
  }
  var date = new Date();
  //var firstDay = new Date(date.getFullYear(), date.getMonth(),1); //Gets Full date and time unneeded rn
  //var lastDay = new Date(date.getFullYear(),date.getMonth()+1,0); //Gets Full date and time unneeded rn
  new Date().getMonth();

  const d = new Date();
  d.getMonth() + 1;
  d.getDate();
  d.getFullYear();
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("p1").innerHTML = date;
  document.getElementById("p2").innerHTML = getDaysInMonth((today.getMonth()+1), today.getFullYear());
}
getSelectedRow = function(val)
    {
        db.transaction(function(transaction) {
              transaction.executeSql('SELECT * FROM Employ where number = ?;',[parseInt(val)], selectedRowValues, errorHandler);

        });
    };
    selectedRowValues = function(transaction,results)
    {
         for(var i = 0; i < results.rows.length; i++)
         {
             var row = results.rows.item(i);
             alert(row['number']);
             alert(row['name']);
         }
    };
