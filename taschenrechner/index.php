<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="format.css">
    <link rel="stylesheet" href="design/animate.css">
    <title>Raschentechner</title>
    
</head>
<body style="background-color: rgb(36, 41, 46);" class="center">

    <?php
    require_once 'rechnen.php'    
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="calc.js"></script>
    <script src="design/bootstrap-notify.js"></script>


    <form name="rechner" id="rechner" method="post">

    <div class="container border">

        <div class="row">
            <div class="divhistory" id="divhistory">     
                    <?php foreach($history as $historyEntry) { ?>
                        <div class="row">
                            <div class="col-5"><input type="text" class="history-display focus" onClick="clearDisplay(); updateDisplay(this.value)" value="<?php echo $historyEntry['rechnung']; ?>" readonly></div>
                            <div class="col-3"><input type="text" class="history-display" value="=" readonly></div>
                            <div class="col-4"><input type="text" class="history-display focus" onClick="clearDisplay(); updateDisplay(this.value)" value="<?php echo $historyEntry['ergebnis']; ?>" readonly></div>
                        </div>
                    <?php } ?>                    
            </div>  
        </div>

        <div class="row">
            <div class="divdisplay" id="divdisplay">
                <input type="text" class="calc-display" value="<?php echo $ergebnis ?>" name="display" id="display" readonly>
            </div> 
        </div>

        <div class="row">        
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="1">1</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="2">2</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="3">3</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="+">+</button>
                <button type="button" class="btn btn-danger custom" onClick="clearDisplay()">AC</button>
            </div>
        </div>

        <div class="row">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="4">4</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="5">5</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="6">6</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="-">-</button>
                <button type="button" class="btn btn-dark custom" onClick="removeOne()">⌫</button>
            </div>
        </div>

        <div class="row">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="7">7</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="8">8</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="9">9</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="*">*</button>
                <button type="button" class="btn btn-dark custom"></button>
            </div>
        </div>

        <div class="row">   
            <div class="btn-group" role="group">    
                <button type="button" class="btn btn-dark custom"></button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="0">0</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value=".">.</button>
                <button type="button" class="btn btn-dark custom" onClick="updateDisplay(this.value)" value="/">/</button>
                <button type="button" class="btn btn-success custom" onClick="submitForm()">=</button>
            </div>
        </div>

        <?php if(!empty($error)){ ?>
            <script type="text/javascript">
                alert("<?php echo $error ?>");
            </script>
        <?php } ?>

    </div>
    </form>
</body>
</html>