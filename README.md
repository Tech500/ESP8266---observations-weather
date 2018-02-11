# ESP8266---observations-weather
ESP8266  - Data Logger and Domain hosted dynamic website

Features of "NTP_Web_Interface.ino".

  1. NTP protocol and time serverServer; used for 15 minute time interval, date-time stamping, and dayofweek (every 6th day, "LOG.TXT"     file gets renamed to keep   file size manageable.   Every Saturday "LOG.TXT" gets renamed in the format "logxxyy" xx being the month     and yy being the date; a new   "LOG.TXT" is created after every file renaming. 

  2. Dynamic web page of current observations for Last update time and date, humidity, dew point, temperature, heat index, barometric 
  ressure (both inches of Mercury and millibars.) 

  3. Server files are listed as web links; clicking link prompts for "Open with/Save as." "FAVICON.ICO", and "ACCESS.TXT" are listed; 
  however, they are for internal use and cannot "Opened with/Save as,"   result of clicking link produces "404 Page not found." 

  4. LOG.TXT file is appended every 15 minutes with the latest update; storing data from Dynamic web page. 

  5. ACCESS.TXT restricted file that logs client IP address.  

  6. DIFFER.TXT stores the difference in Barometric Pressure for the last fifteen minutes. Only a difference of equal to or greater 
  than .020 inches of Mercury are logged with difference, date and time. 

  7. URL file names other than ones defined in the Sketch produce "404 Page not found."  Methods other than "GET," produce "405" 
  message and exits current request. 

  8. Audible alert from Piezo electric buzzer when there is Barometric Pressure difference of .020 inches of Mercury. I am interested
  in sudden drop of Barometric Pressure in a 15 minute interval.  Serve  weather more likely with a sudden drop.  Difference of .020 
  inches of Mercury point is set for my observations to log and sound audible alert; not based on any known value to be associated  
  with serve  weather. 

  9. Two-line LCD Display of Barometric Pressure, in both inches of Mercury and millibars. 
 
 10. Tempature, Humidity, Barometric Pressure, and Dew Point have four embedded "ThinkSpeak.com" graphs on one web page.  Graphs are 
 created from Iframes provided by "ThingSpeak.com" 

 11. Added some logic for no NTP packet received; where the NTP packet gets requested until a packet is received.  Created file 
 "SERVER.TXT" for "SERVER" restarts --date and time. 

 12. Added Stephan Borsay's PHP code for received data requests from programs POST method.  PHP code is used on a hosted Domain 
 website. 
----------------------------------------------------- 
 Note this is a project in development; maybe offline or log files may be affected.
 Server is online 24/7; except during periods of testing.  http://tinyurl.com/Observations-weather --ESP8266 based.  Domain based 
 website:  http://tinyurl.com/indpls-weather

 Server is a "RobotDyn WiFi D1 R2" with 32 MB Flash Memory.  Development Board, purchased from "RobotDyn.com" and Adafruit BME280 
 breakout board, purchased from "Adafruit.com" ; both are required for project, BME280 sensor is located indoors.   

 Developement board is Arduino friendly; can be programed using the Arduino IDE.  Project cost is less than $20.00 for Development 
 Board and one, Adafruit BME280 sensor for Barometric Pressure, Humidity, and Temperature. 
