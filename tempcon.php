<?php
/**
* temcon.php - Temperature conversion functions
*
* Supports 4 temp scales; Fahrenheit, Celsius, Kelvine and Rankine
*
* PHP version 5
*
* @author     Ron Nims <rleenims@gmail.com>
* @copyright  2017 Ron Nims
*/

/**
* Convert Fahrenheit to Celsius, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertFtoC($tempValue)
{
        $calcTemp = ($tempValue - 32) * (5 / 9);
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Fahrenheit to Kelvin, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertFtoK($tempValue)
{
        $calcTemp = ($tempValue + 459.67) * (5 / 9);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Fahrenheit to Rankine, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertFtoR($tempValue)
{
        $calcTemp = ($tempValue + 459.67);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Celsius to Fahrenheit, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertCtoF($tempValue)
{
        $calcTemp = ($tempValue  * (9 / 5) ) + 32;         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Celsius to Kelvin, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertCtoK($tempValue)
{
        $calcTemp = ($tempValue + 273.15);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Celsius to Rankine, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertCtoR($tempValue)
{
        $calcTemp = ($tempValue + 273.15) * (9 / 5);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Kelvin to Fahrenheit, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertKtoF($tempValue)
{
        $calcTemp = ($tempValue * (9 / 5) ) - 459.67;         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Kelvin to Celsius, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertKtoC($tempValue)
{
        $calcTemp = $tempValue - 273.15;         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Kelvin to Rankine, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertKtoR($tempValue)
{
        $calcTemp = $tempValue * (9 / 5);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Rankine to Fahrenheit, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertRtoF($tempValue)
{
        $calcTemp = $tempValue - 459.67 ;         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Rankine to Celsius, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertRtoC($tempValue)
{
        $calcTemp = ($tempValue - 491.67) * (5 / 9);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

/**
* Convert Rankine to Kelvin, round to 2 decimal places
* @param float $tempValue
* @return float
*/
function convertRtoK($tempValue)
{
        $calcTemp = $tempValue * (5 / 9);         
        $calcTemp = round($calcTemp, 2);
        return $calcTemp;            
}

