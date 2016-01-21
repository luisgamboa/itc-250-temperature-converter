<?php 
//temp-conver.php
//The app will allow users to convert temperature types, 
//for example Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin
//January 21st, 2016

//header('Content-type: text/plain; charset=utf-8');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;

echo' 
     <head>
        <meta charset="utf-8">
      </head>
     <h2>Temperature Conversion</h2> 
     
     <form action = "' . THIS_PAGE . '" method = "GET"> 
          
         <select name="temperatureType"> 
             <option value="celcius">Celsius</option> 
             <option value="fahrenheit">Fahrenheit</option> 
             <option value="kelvin">Kelvin</option> 
        </select>
        <br />
        <br />
        Degrees: <input type = "text" name = "degree" size=4>
         <br/> 
         <br/> 
         <input type = "submit" name = "Convert" value="Convert"/> 
     </form>
     
     ';


 //check for input from the user
if (array_key_exists('degree',$_GET))

 {
	$typeOfTemperature = $_GET['temperatureType'];
	$degreeValue = number_format($_GET['degree'],2);
	$firstLength = strlen($_GET['degree']);
	
	//it willcheck that input is not empty
    
	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
            if ($typeOfTemperature == "celcius" and $degreeValue >=-273.15) 
                {
                    // Celcius
                    echo "<table><tr><th> Conversion Results</th></tr><tr><td>
                    $degreeValue</td><td>Celsius</td></tr>";
                
                    //Convert to Fahrenheith
                    $celciusToFahrenheit = $degreeValue*9/5+32; 
                    echo "<tr><td>";
                    echo number_format($celciusToFahrenheit,2);
                    echo " </td><td>Farenheit</td></tr>";
                    
                    //Convert to Kelvin
                    $celciusToKelvin = $degreeValue+273.15; 
                    echo "<tr><td>";
                    echo number_format($celciusToKelvin,2); 
                    echo " </td><td>Kelvin</td></tr>";
                }

            if ($typeOfTemperature == "fahrenheit" and $degreeValue >=-459.67) 
                {
                     //Farhenheit
                     echo "<table><tr><th> Conversion Results</th></tr><tr><td>
                     $degreeValue</td><td>Farhenheit</td></tr>"; 
                     
                     //Convert to Celcius
                     $fahrenheitToCelcius = ($degreeValue -32)*5/9; 
                     echo "<tr><td>";
                     echo number_format($fahrenheitToCelcius,2); 
                     echo " </td><td>Celsius</td></tr>";
                     
                     //Convert to Kelvin
                     $fahrenheitToKelvin = $fahrenheitToCelcius+273.15; 
                     echo "<tr><td>";
                     echo number_format($fahrenheitToKelvin,2);
                     echo " </td><td>Kelvin</td></tr>";
                } 

             if ($typeOfTemperature == "kelvin" and $degreeValue >=0) 
                {
                     //Kelvin
                     echo "<table><tr><th> Conversion Results</th></tr><tr><td> 
                     $degreeValue</td><td>Kelvin</td></tr>"; 
                 
                    //Convert to Fahrenheit
                     $kelvinToFahrenheit = ($degreeValue - 273.15) * 9 / 5 + 32; 
                     echo "<tr><td>";
                     echo number_format($kelvinToFahrenheit,2); 
                     echo " </td><td>Farenheit</td></tr>";
                     
                     //Convert to Celcius
                     $kelvinToCelcius = $degreeValue-273.15; 
                     echo "<tr><td>";
                     echo number_format($kelvinToCelcius,2); 
                    echo " </td><td>Celsius</td></tr>";
                } 
        //echo an error message if the value is invalid (i.e. too low) 
        else if (($typeOfTemperature == "kelvin" and $degreeValue <0) or ($typeOfTemperature == "fahrenheit" and $degreeValue < -459.67) or ($typeOfTemperature == "celcius" and $degreeValue < -273.15) ){
		echo "<span style = \"color:red\">*Whoa man, you can't get lower than absolute zero. It's science! Enter the real temperature! </span>";}
		 
	 }
	 else
		//echo an error message if input is empty
		echo "<span style = \"color:red\">*Please enter a valid temperature value.</span>";
}
// php ending tag intentially omited
