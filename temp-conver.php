<?php 
//temp-conver.php
//The app will allow users to convert temperature types, 
//for example Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

echo' 
     <h2>Temperature Conversion</h2> 
     
     <form action = "' . THIS_PAGE . '" method = "GET"> 
         Degrees: <input type = "text" name = "degree" size=4> 
         <select name="temperatureType"> 
             <option value="celcius">Celsius</option> 
             <option value="fahrenheit">Fahrenheit</option> 
             <option value="kelvin">Kelvin</option> 
        </select> 
         <br/> 
         <br/> 
         <input type = "submit" name = "Convert" value="Convert"/> 
     </form>
     
     ';


 //check for input from the user
if (array_key_exists('degree',$_GET))

 {
	$typeOfTemperature = $_GET['temperatureType'];
	$degreeValue = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);
	
	//it willcheck that input is not empty
	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
            if ($typeOfTemperature == "celcius") 
                {
                     echo "<table><tr><th> Conversion Results</th></tr><tr><td>
                     $degreeValue</td><td>Celsius</td></tr>"; 
                     $celciusToFahrenheit = $degreeValue*9/5+32; 
                     echo "<tr><td>$celciusToFahrenheit</td><td>Fahrenheit</td></tr>"; 
                     $celciusToKelvin = $degreeValue+273.15; 
                     echo "<tr><td>$celciusToKelvin </td><td>Kelvin</td></tr>"; 
                }

            if ($typeOfTemperature == "fahrenheit") 
                {
                     echo "<table><tr><th> Conversion Results</th></tr><tr><td>
                     $degreeValue</td><td>Farhenheit</td></tr>"; 
                     $fahrenheitToCelcius = ($degreeValue -32)*5/9; 
                     echo "<tr><td>$fahrenheitToCelcius</td><td>Celsius</td></tr>"; 
                     $fahrenheitToKelvin = $fahrenheitToCelcius+273.15; 
                     echo "<tr><td>$fahrenheitToKelvin </td><td>Kelvin</td></tr>"; 
                } 

             if ($typeOfTemperature == "kelvin") 
                {
                     echo "<table><tr><th> Conversion Results</th></tr><tr><td> 
                     $degreeValue</td><td>Kelvin</td></tr>"; 
                     $kelvinToFahrenheit = ($degreeValue - 273.15) * 9 / 5 + 32; 
                     echo "<tr><td>$kelvinToFahrenheit</td><td>Fahrenheit</td></tr>"; 
                     $kelvinToCelcius = $degreeValue-273.15; 
                     echo "<tr><td>$kelvinToCelcius </td><td>Celsius</td></tr>"; 
                } 
		 
	 }
	 else
		//echo an error message if input is empty
		echo "<span style = \"color:red\">*Please enter a valid temperature value.</span>";
}
