function updateDisplay(newDisplay){  
    document.getElementById("display").value += newDisplay;
}

function clearDisplay(){  
    document.getElementById("display").value = "";
    
}

function submitForm(){
    
    document.getElementById("rechner").submit();
    
}

window.addEventListener('keydown', function (e) {
    if (e.keyCode == 96 || e.keyCode == 48) {
        updateDisplay(0)
    } else if (e.keyCode == 97 || e.keyCode == 49){
        updateDisplay("1")
    } else if (e.keyCode == 98 || e.keyCode == 50){
        updateDisplay("2")
    } else if (e.keyCode == 99 || e.keyCode == 51){
        updateDisplay("3")
    } else if (e.keyCode == 100 || e.keyCode == 52){
        updateDisplay("4")
    } else if (e.keyCode == 101 || e.keyCode == 53){
        updateDisplay("5")
    } else if (e.keyCode == 102 || e.keyCode == 54){
        updateDisplay("6")
    } else if (e.keyCode == 103 || e.keyCode == 55){
        updateDisplay("7")
    } else if (e.keyCode == 104 || e.keyCode == 56){
        updateDisplay("8")
    } else if (e.keyCode == 105 || e.keyCode == 57){
        updateDisplay("9")
    } else if (e.keyCode == 107){
        updateDisplay("+")
    } else if (e.keyCode == 109){
        updateDisplay("-")
    } else if (e.keyCode == 188 || e.keyCode == 190 || e.keyCode == 108){
        updateDisplay(".")
    } else if (e.keyCode == 111){
        updateDisplay("/")
    } else if (e.keyCode == 106){
        updateDisplay("*")
    } else if (e.keyCode == 13){
        submitForm()
    }
});


