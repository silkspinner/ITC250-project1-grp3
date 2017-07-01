<?php
// conversions.php
// Temperature conversion functions
// Supports 4 temp scales; Fahrenheit, Celsius, Kelvine and Rankine


function convertFtoC($tempValue) {
        // Fahrenheit to Celsius
        $calcTemp = ($tempValue - 32) * (5 / 9);         
        return $calcTemp;            
}

function convertFtoK($tempValue) {
        // Fahrenheit to Kelvin
        $calcTemp = ($tempValue + 459.67) * (5 / 9);         
        return $calcTemp;            
}

function convertFtoR($tempValue) {
        // Fahrenheit to Rankine
        $calcTemp = ($tempValue + 459.67);         
        return $calcTemp;            
}

function convertCtoF($tempValue) {
        // Celsius to Fahrenheit
        $calcTemp = ($tempValue  * (9 / 5) ) + 32;         
        return $calcTemp;            
}

function convertCtoK($tempValue) {
        // Celsius to Kelvin
        $calcTemp = ($tempValue + 273.15);         
        return $calcTemp;            
}

function convertCtoR($tempValue) {
        // Celsius to Rankine
        $calcTemp = ($tempValue + 273.15) * (9 / 5);         
        return $calcTemp;            
}

function convertKtoF($tempValue) {
        // Kelvin to Fahrenheit
        $calcTemp = ($tempValue * (9 / 5) ) - 459.67;         
        return $calcTemp;            
}

function convertKtoC($tempValue) {
        // Kelvin to Celsius
        $calcTemp = $tempValue - 273.15;         
        return $calcTemp;            
}

function convertKtoR($tempValue) {
        // Kelvin to Rankine
        $calcTemp = $tempValue * (9 / 5);         
        return $calcTemp;            
}

function convertRtoF($tempValue) {
        // Rankine to Fahrenheit
        $calcTemp = $tempValue - 459.67 ;         
        return $calcTemp;            
}

function convertRtoC($tempValue) {
        // Rankine to Celsius
        $calcTemp = ($tempValue - 491.67) * (5 / 9);         
        return $calcTemp;            
}

function convertRtoK($tempValue) {
        // Rankine to Kelvin
        $calcTemp = $tempValue * (5 / 9);         
        return $calcTemp;            
}

