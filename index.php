<!--Ron’s version of a working index.php-->

<!--code review completed and passed by Nicole Brown 07/16/2017-->
<?php
//tempconverter.php
include "tempcon.php";

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// initialize temp variables
$StartTemp = "";
$FinalTemp = "";

$message = "";

// set the initial values for temp types
if (!isset($TempConvert)) $TempConvert = "F";
if (!isset($ConvertedTemp)) $ConvertedTemp = "C";

// initialize checked arrays for each input and output type
// these allow us to reset the form to user’s previous input
$inchecked = array("F" => "", "C" => "", "K" => "", "R" => "" );
$outchecked = array("F" => "", "C" => "", "K" => "", "R" => "" );

// create array of absolute zero values for temp validation
$abZero = array("F" => -459.67, "C" => -273.15, "K" => 0.0, "R" => 0.0 );

// create array of labels for temp types
$tempLabels = array("F" => "Fahrenheit", "C" => "Celsius", "K" => "Kelvin", "R" => "Rankine" );


//echo doc header
echo '
    <!doctype html> 
    <html>
    <head>
        <title><?=$myTitle?></title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Shanti|Suez+One" rel="stylesheet">
    </head>

    <body>
    <div class="wrapper">
    <h2>Temperature Conversion Calculator</h2>
    <hr>
    ';

if(isset($_POST["Submit"])) {
    
    $StartTemp = $_POST["StartTemp"];
    $TempConvert = $_POST["TempConvert"];
    $ConvertedTemp = $_POST["ConvertedTemp"];

    $inchecked[$TempConvert] = "checked";
    $outchecked[$ConvertedTemp] = "checked";    
    if($StartTemp >= $abZero[$TempConvert]) {
        $message = "";
        // Composite the convert function to use
        $convertFunction = "convert" . $TempConvert . "to" . $ConvertedTemp;
        // then execute that function on the start temp
        $FinalTemp = $convertFunction($StartTemp);


        // display conversion information
        $message =  '<p>' . $StartTemp . ' degrees ' . $tempLabels[$TempConvert] . 
            ' converts to ' . $FinalTemp . ' degrees ' . $tempLabels[$ConvertedTemp] . '</p>';
    } else {
        $FinalTemp = "";
        $message = "INVALID: Input temperature can't be below Absolute Zero.";
    }
} else {
    $inchecked[$TempConvert] = "checked";
    $outchecked[$ConvertedTemp] = "checked";    
}

//show form
echo '
<form action="' . THIS_PAGE . '" method="post">
    <div id="body-flex">
    <div id="body-content">
        <b>Input Temperature:</b> <input type="number" name="StartTemp" maxlength="6" step=".1" value="' . $StartTemp . '" required/><br />
        <br />
        <label>Input Temperature type?<br />
        <input type="radio" name="TempConvert" value="F" ' . $inchecked["F"] . ' required>' . $tempLabels["F"] . '<br />
        <input type="radio" name="TempConvert" value="C" ' . $inchecked["C"] . ' />' . $tempLabels["C"] . '<br />
        <input type="radio" name="TempConvert" value="K" ' . $inchecked["K"] . ' />' . $tempLabels["K"] . '<br />
        <input type="radio" name="TempConvert" value="R" ' . $inchecked["R"] . ' />' . $tempLabels["R"] . '<br />
        </label>           
    </div>
    <aside>
        <b>Output Temperature:</b> <span id="tempout">' . $FinalTemp . '</span><br />
        <br />
        <label>Output Temperature type?<br />
        <input type="radio" name="ConvertedTemp" value="F" ' . $outchecked["F"] . ' required/>' . $tempLabels["F"] . '<br />
        <input type="radio" name="ConvertedTemp" value="C" ' . $outchecked["C"] . ' />' . $tempLabels["C"] . '<br />
        <input type="radio" name="ConvertedTemp" value="K" ' . $outchecked["K"] . ' />' . $tempLabels["K"] . '<br />
        <input type="radio" name="ConvertedTemp" value="R" ' . $outchecked["R"] . ' />' . $tempLabels["R"] . '<br />
        </label>
    </aside>
    </div>
    <div id="button-div">
    <button type="submit" name="Submit"><img src="calculate.png" alt="Calculate the converted temperature" id="button-img"></button>
    </div>
    <br />
     <br /><br /><button type="button"><a href="https://github.com/silkspinner/ITC250-project1-grp3">Source Code</a></button>
        </form>   
    </body>
</html>

</form>

<h3>' . $message . '</h3>
';

//    <input type="submit" name="Submit" id="submit-button"/>

//echo doc footer
echo '
    <hr>

    </div> <!-- opening div in header -->

    </body>
    </html>
    ';

?>
