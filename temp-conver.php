<?php
//temp-conver.php formulas
//The app will allow users to convert temperature types, for example Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


    function fahrenheit_to_celsius($given_value)
    {
        $celsius=5/9*($given_value-32);
        return $celsius ;
    }

    function celsius_to_fahrenheit($given_value)
    {
        $fahrenheit=$given_value*9/5+32;
        return $fahrenheit ;
    }


//html                     
echo '
        <form action="" method="post">
        <table>
            <tr>
                <td>
                    <select name="firstTemperatureType">
                        <option value="fahrenheit">Fahrenheit</option>
                        <option value="celsius">Celsius</option>
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
                        if($firstTemperatureType=='celsius')
                        {
                            $fahrenheit=celsius_to_fahrenheit($given_value);
                            echo "Celsious  $given_value = $fahrenheit Fahrenheit";
                        }
    
                    }