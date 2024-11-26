let countValue = 0;

function clickCounter() {
    countValue++;
   
    document.getElementById("result").textContent = countValue;
    document.getElementById("hiddenResult").value = countValue; }
