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
 * Convert Fahrenheit to Fahrenheit, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertFtoF($tempValue)
{
        return round($tempValue, 2);            
}

/**
 * Convert Fahrenheit to Celsius, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertFtoC($tempValue)
{
        return round((($tempValue - 32) * (5 / 9)), 2);            
}

/**
 * Convert Fahrenheit to Kelvin, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertFtoK($tempValue)
{
        return round((($tempValue + 459.67) * (5 / 9)), 2);            
}

/**
 * Convert Fahrenheit to Rankine, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertFtoR($tempValue)
{
        return round(($tempValue + 459.67), 2);            
}

/**
 * Convert Celsius to Fahrenheit, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertCtoF($tempValue)
{
        return round((($tempValue  * (9 / 5) ) + 32), 2);            
}

/**
 * Convert Celsius to Celsius, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertCtoC($tempValue)
{
        return round($tempValue, 2);            
}

/**
 * Convert Celsius to Kelvin, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertCtoK($tempValue)
{
        return round(($tempValue + 273.15), 2);            
}

/**
 * Convert Celsius to Rankine, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertCtoR($tempValue)
{
        return (($tempValue + 273.15) * (9 / 5));            
}

/**
 * Convert Kelvin to Fahrenheit, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertKtoF($tempValue)
{
        return round((($tempValue * (9 / 5) ) - 459.67), 2);            
}

/**
 * Convert Kelvin to Celsius, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertKtoC($tempValue)
{
        return round(($tempValue - 273.15), 2);            
}

/**
 * Convert Kelvin to Kelvin, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertKtoK($tempValue)
{
        return round($tempValue, 2);            
}

/**
 * Convert Kelvin to Rankine, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertKtoR($tempValue)
{
        return round(($tempValue * (9 / 5)), 2);            
}

/**
 * Convert Rankine to Fahrenheit, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertRtoF($tempValue)
{
        return round(($tempValue - 459.67), 2);            
}

/**
 * Convert Rankine to Celsius, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertRtoC($tempValue)
{
        return round((($tempValue - 491.67) * (5 / 9)), 2);            
}

/**
 * Convert Rankine to Kelvin, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertRtoK($tempValue)
{
        return round(($tempValue * (5 / 9)), 2);            
}

/**
 * Convert Rankine to Rankine, round to 2 decimal places
 * @param float $tempValue
 * @return float
 */
function convertRtoR($tempValue)
{
        return round($tempValue, 2);            
}

