<?php
// conversions.php
// Temperature conversion functions
// Supports 4 temp scales; Fahrenheit, Celsius, Kelvine and Rankine

function convertFahrenheit($tempValue, $outputType) {
    // choose formula based on $outputType (int)

    switch($outputType) {
        case 1:
            // to Fahrenheit (identity)
            $calcTemp = $tempValue ;         
            return $calcTemp;
            
        case 2:
            // to Celsius
            $calcTemp = ($tempValue - 32) * (5 / 9);         
            return $calcTemp;            
            
        case 3:
            // to Kelvin
            $calcTemp = ($tempValue + 459.67) * (5 / 9);         
            return $calcTemp;            
            
        case 4:
            // to Rankine
            $calcTemp = ($tempValue + 459.67);         
            return $calcTemp;            
    }
}

function convertCelsius($tempValue, $outputType) {
    // choose formula based on $outputType (int)

    switch($outputType) {
        case 1:
            // to Fahrenheit
            $calcTemp = ($tempValue  * (9 / 5) ) + 32;         
            return $calcTemp;
            
        case 2:
            // to Celsius (identity)
            $calcTemp = $tempValue ;         
            return $calcTemp;            
            
        case 3:
            // to Kelvin
            $calcTemp = ($tempValue + 273.15);         
            return $calcTemp;            
            
        case 4:
            // to Rankine
            $calcTemp = ($tempValue + 273.15) * (9 / 5);         
            return $calcTemp;            
    }
}

function convertKelvin($tempValue, $outputType) {
    // choose formula based on $outputType (int)

    switch($outputType) {
        case 1:
            // to Fahrenheit
            $calcTemp = ($tempValue * (9 / 5) ) - 459.67;         
            return $calcTemp;
            
        case 2:
            // to Celsius
            $calcTemp = $tempValue - 273.15;         
            return $calcTemp;            
            
        case 3:
            // to Kelvin (identity)
            $calcTemp = $tempValue ;         
            return $calcTemp;            
            
        case 4:
            // to Rankine
            $calcTemp = $tempValue * (9 / 5);         
            return $calcTemp;            
    }
}

function convertRankine($tempValue, $outputType) {
    // choose formula based on $outputType (int)

    switch($outputType) {
        case 1:
            // to Fahrenheit
            $calcTemp = $tempValue - 459.67 ;         
            return $calcTemp;
            
        case 2:
            // to Celsius
            $calcTemp = ($tempValue - 491.67) * (5 / 9);         
            return $calcTemp;            
            
        case 3:
            // to Kelvin
            $calcTemp = $tempValue * (5 / 9);         
            return $calcTemp;            
            
        case 4:
            // to Rankine (identity)
            $calcTemp = $tempValue ;         
            return $calcTemp;            
    }
}
