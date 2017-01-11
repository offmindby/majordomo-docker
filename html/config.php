<?php
/**
* Project Config
*
* @package MajorDoMo
* @author Serge Dzheigalo <jey@tut.by> http://smartliving.ru/
* @version 1.1
*/


 Define('DB_HOST', '127.0.0.1');
 Define('DB_NAME', 'db_terminal');
 Define('DB_USER', 'root');
 Define('DB_PASSWORD', 'majordomo');

 Define('DIR_TEMPLATES', "./templates/");
 Define('DIR_MODULES', "./modules/");
 Define('DEBUG_MODE', 1);
 Define('UPDATES_REPOSITORY_NAME', 'smarthome');

 Define('PROJECT_TITLE', 'MajordomoSL');
 Define('PROJECT_BUGTRACK', "bugtrack@smartliving.ru");

 if (IsSet($_ENV["COMPUTERNAME"])) {
  Define('COMPUTER_NAME', strtolower($_ENV["COMPUTERNAME"])); 
 } else {
  Define('COMPUTER_NAME', 'mycomp');                       // Your computer name (optional)
 }


 Define('DOC_ROOT', dirname(__FILE__));              // Your htdocs location (should be detected automatically)

 Define('SERVER_ROOT', '/var/www/html');
 Define('PATH_TO_PHP', 'php');
 Define('PATH_TO_MYSQLDUMP', "mysqldump");
 

 if (IsSet($_ENV["S2G_BASE_URL"])) {
  Define('BASE_URL', $_ENV["S2G_BASE_URL"]);
 } else {
  Define('BASE_URL', 'http://127.0.0.1:80');              // Your base URL:port (!!!)
 }


 Define('ROOT', DOC_ROOT."/");
 Define('ROOTHTML', "/");

 if (IsSet($_SERVER['SERVER_NAME'])) {
  Define('PROJECT_DOMAIN', $_SERVER['SERVER_NAME']);
 }

 //Define('ONEWIRE_SERVER', 'tcp://localhost:8234');    // 1-wire OWFS server

 //Define('HOME_NETWORK', '192.168.0.*');                  // home network (optional)
 //Define('EXT_ACCESS_USERNAME', 'user');                  // access details for external network (internet)
 //Define('EXT_ACCESS_PASSWORD', 'password');

 Define('KEEP_HISTORY_DUPLICATES', 1);

// Define('LOG_CYCLES', 1);

 //Define('DISABLE_WEBSOCKETS', 1);
 Define('WEBSOCKETS_PORT', 8002);


