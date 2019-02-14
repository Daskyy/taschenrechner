function updateDisplay(newDisplay){  
    document.getElementById("display").value += newDisplay;
}

function clearDisplay(){  
    document.getElementById("display").value = "";
    
}

function submitForm(){
    
    document.getElementById("rechner").submit();
    
}

function removeOne()
{
    var strng=document.getElementById("display").value;
    document.getElementById("display").value=strng.substring(0,strng.length-1)
}



function enableEdit(){
    if(document.getElementById("display").readOnly = false){
        document.getElementById("display").readOnly = true;
    } else {
        document.getElementById("display").readOnly = false;
    }
}

function alert(fehlermeldung){
    $.notify({
        title: fehlermeldung,
        message: 'Bitte überprüfe deine Eingabe.',
    },{
        type: "danger",
        allow_dismiss: true,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 5000,
        timer: 1000,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
        icon_type: 'class',
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '</div>' 
    });
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
    } else if (e.keyCode == 8){
        removeOne()
    }
});






