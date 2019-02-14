<html>
<head>
    <link rel="stylesheet" href="format.css">
    <script src="calc.js"></script>
    <title>Taschenrechner</title>   
    </head>

<body style="background-color:#E6E6FA">

    <?php
    /* ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); */

    require_once 'rechnen.php'    
    ?>

    <form name="rechner" id="rechner" action="" method="post">
        
        <div class="divdisplay" id="divdisplay">
    
        <table>
            <tr>
                <td><input type="text" class="history-display" value="<?php echo $history[0]; ?>" readonly></td>
                <td><input type="text" class="history-display" value="=" readonly></td>
                <td><input type="text" class="history-display" value="<?php echo $history[1]; ?>" readonly></td>
            </tr>
            <tr>
                <td><input type="text" class="history-display" value="<?php echo $history[2]; ?>" readonly></td>
                <td><input type="text" class="history-display" value="=" readonly></td>
                <td><input type="text" class="history-display" value="<?php echo $history[3]; ?>" readonly></td>
            </tr>
            <tr>
                <td><input type="text" class="history-display" value="<?php echo $history[4]; ?>" readonly></td>
                <td><input type="text" class="history-display" value="=" readonly></td>
                <td><input type="text" class="history-display" value="<?php echo $history[5]; ?>" readonly></td>
            </tr>
        </table>
            <input type="text" class="calc-display" value="<?php echo $ergebnis ?>" name="display" id="display" readonly/>
        </div>  
        <div class="background">
            <table>
                <tr>
                    <td><button type="button" value="1" class="button1" onClick="updateDisplay(this.value)">1</button></td>
                    <td><button type="button" value="2" class="button1" onClick="updateDisplay(this.value)">2</button></td>
                    <td><button type="button" value="3" class="button1" onClick="updateDisplay(this.value)">3</button></td>
                    <td><button type="button" value="+" class="button1" onClick="updateDisplay(this.value)">+</button></td>
                    <td><button type="button" class="button1" onClick="clearDisplay()">AC</button></td>
                </tr>
                <tr>
                    <td><button type="button" value="4" class="button1" onClick="updateDisplay(this.value)">4</button></td>
                    <td><button type="button" value="5" class="button1" onClick="updateDisplay(this.value)">5</button></td>
                    <td><button type="button" value="6" class="button1" onClick="updateDisplay(this.value)">6</button></td>
                    <td><button type="button" value="-" class="button1" onClick="updateDisplay(this.value)">-</button></td>
                    <td><button type="button" value="" class="button1"></button></td>
                </tr>
                <tr>
                    <td><button type="button" value="7" class="button1" onClick="updateDisplay(this.value)">7</button></td>
                    <td><button type="button" value="8" class="button1" onClick="updateDisplay(this.value)">8</button></td>
                    <td><button type="button" value="9" class="button1" onClick="updateDisplay(this.value)">9</button></td>
                    <td><button type="button" value="*" class="button1" onClick="updateDisplay(this.value)">*</button></td>
                    <td><button type="button" value="" class="button1"></button></td>
                </tr>
                <tr>
                    <td><button type="button" class="button1"></button></td>
                    <td><button type="button" value="0" class="button1" onClick="updateDisplay(this.value)">0</button></td>
                    <td><button type="button" value="." class="button1" onClick="updateDisplay(this.value)">.</button></td>
                    <td><button type="button" value="/" class="button1" onClick="updateDisplay(this.value)">/</button></td> 
                    <td><button type="button" value="buttonequals" class="buttonequals" onClick="submitForm()">=</button></td>    
                </tr>
            </table>
            
        </div>
    </form>


</body>
</html>