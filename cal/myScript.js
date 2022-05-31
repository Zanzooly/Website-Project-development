
function addition(){
let a = parseInt(document.getElementById('input1').value);
let b = parseInt(document.getElementById('input2').value);

  let x = a + b;
document.getElementById('outBody').innerHTML = a + " + " + b + " = " + x;
}

function show(id){
    document.getElementById(id).style.display = "block";
}
function flashing(id){
  let x = document.getElementById(id);
  if (x.style.color == "red") {
    x.style.color = "blue";
  }

  else if (x.style.color == "blue") {
    x.style.color = "red";
  }
}

function chek(){
  let x = parseInt(document.getElementById('answer').value);
  if (x == 19) {
    document.getElementById('check').innerHTML = "correct!";
    document.getElementById('check').style.color = "red";
    setTimeout(show, 1000, 'resetButton');
    setInterval(flashing, 200, 'check');
    setTimeout(alert, 2000, 'you win!')
    return 0;
  }
  if (x == 21){
    document.getElementById('check').innerHTML = "This is not a joke, try again"
    document.getElementById('answer').value = "";
    return 0;
  }
  else{
    document.getElementById('check').innerHTML = "try again"
    document.getElementById('answer').value = "";
    return 0;
  }

}
