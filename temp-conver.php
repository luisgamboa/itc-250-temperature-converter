<link rel="stylesheet" href="style.css">

<?php
//temp-conver.php formulas
//The app will allow users to convert temperature types, for example Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;


    //Fahrenheit to Celsius formula
    function fahrenheit_to_celsius($given_value)
    {
        $celsius=5/9*($given_value-32);
        return $celsius ;
    }
    
    //Fahrenheit to Kelvin formula
    function fahrenheit_to_kelvin($given_value)
    {
        $kelvin=($given_value+459.67)*5/9;
        return $kelvin ;
    }

    //Celsius to Fahrenheit formula
    function celsius_to_fahrenheit($given_value)
    {
        $fahrenheit=$given_value*9/5+32;
        return $fahrenheit ;
    }

    //Celsius to Kelvin formula
    function celsius_to_kelvin($given_value)
    {
        $kelvin=$given_value+273.15;
        return $kelvin ;
    }

    //Kelvin to Celsius formula
    function kelvin_to_celsius($given_value)
    {
        $celsius=$given_value-273.15;
        return $celsius ;
    }

    //Kelvin to Fahrenheit formula
    function kelvin_to_fahrenheit($given_value)
    {
        $fahrenheit=($given_value-459.67)*5/9;
        return $fahrenheit ;
    }




//html                  
echo '

        <form action="' . THIS_PAGE . '" method="post">
        <table>
            <tr>
                <td>
                    <select name="firstTemperatureType">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                        <option value="kelvin">Kelvin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="given_value">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="secondTemperatureType">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
                        <option value="kelvin">Kelvin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Submit" value="Convert">
                </td>
            </tr>
            <tr>
                <td>
                
                </td>
            </tr>
        </table>
        </form>
        
        
';

//results
if(isset($_POST['Submit']))
    
{
                        $firstTemperatureType=$_POST['firstTemperatureType'];
                        $secondTemperatureType=$_POST['secondTemperatureType'];
                        $given_value=$_POST['given_value'];
    
                        if($firstTemperatureType=='fahrenheit')
                        {
                            $celsious=fahrenheit_to_celsius($given_value);
                            echo "Fahrenheit $given_value = $celsious Celsious";
                        }
    
    

    
    
                        elseif($firstTemperatureType=='fahrenheit')
                        {
                            $kelvin=fahrenheit_to_kelvin($given_value);
                            echo "Fahrenheit  $given_value = $kelvin Kelvin";
                        }
                        
    

}



