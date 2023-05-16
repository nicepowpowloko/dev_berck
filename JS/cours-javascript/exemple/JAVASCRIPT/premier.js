// Definition
var runBtn = document.getElementById('run');
var resetBtn = document.getElementById('reset');
var box = document.getElementById('box');

// Functions
function forwardBox() {
  var step = 0;
  var intervalId = setInterval(function() {
    if ( step > 350 ) {
        clearInterval(intervalId);
    } else {
      step++;
      box.style.left = step + 'px';
    }
  }, 10);
}

function resetBox() {
  box.style.left = '0px';
}

// Execute by clicking event.
runBtn.onclick = forwardBox;
resetBtn.onclick = resetBox;