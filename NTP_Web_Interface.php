<?php

/*


  ESP8266: send data to your Domain (or mine: Embedded-iot.net/dht11/dataCollector.php)(

  Original .php code by Stephen Borsay
  
  Uses POST command to send DHT data to a designated website
  The circuit:
  * BME280
  * Post to Domain 

  Modified by techno500 for $_REQUEST names
*/

date_default_timezone_set("America/Indianapolis");
$TimeStamp = "The current time is " . date("h:i:sa");
file_put_contents('dataDisplayer.html', $TimeStamp, FILE_APPEND);


   if( $_REQUEST["fahren"] ||  $_REQUEST["heat"] ||  $_REQUEST["hum"] ||  $_REQUEST["dewpt"]
       ||  $_REQUEST["cpressure"] ||  $_REQUEST["bars"] || $_REQUEST["altit"] ) 
   {
      echo " The Temperature is: ". $_REQUEST['fahren']. "F. <br />";
      echo " The Heat Index is: ". $_REQUEST['heat']. " Heat Index <br />";
	 echo " The Temperature is: ". $_REQUEST['hum']. " hum <br />";
	 echo " The Dew Point is: ". $_REQUEST['dewpt']. " Dew Point<br />";
      echo " The Barometric Pressure is: ". $_REQUEST['cpressure']. " in. HG. <br />";
      echo " The Barometric Pressure is: ". $_REQUEST['bars']. " millibars <br />";
	 echo " The Altitude is: ". $_REQUEST['altit']. " Feet <br />";
   }
	  
	
$var1 = $_REQUEST['fahren'];
$var2 = $_REQUEST['heat'];
$var3 = $_REQUEST['hum'];
$var4 = $_REQUEST['dewpt'];
$var5 = $_REQUEST['cpressure'];
$var6 = $_REQUEST['bars'];
$var7 = $_REQUEST['altit'];

$WriteMyRequest=
"<p> The Temperature is : "   		. $var1 . " F. </p>".
"<p>And the Heat Index is : " 		. $var2 . " F. </p>".
"<p>And the Humidity : "   		. $var3 . " % </p>".
"<p>And The Dew Point is : "  		. $var4 . " F. </p>".
"<p>And The Barometric Pressure is : "  . $var5 . " in. HG. </p>".
"<p>And The Barometric Pressure is : "  . $var6 . " mb</p>".
"<p>And The Altitude is : "  			. $var7 . " Feet </p><br/>";


file_put_contents('Displayer.html', $WriteMyRequest, FILE_APPEND);


?>