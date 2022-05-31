//resources
//


let cal = [];

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
  let days = 31;
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
