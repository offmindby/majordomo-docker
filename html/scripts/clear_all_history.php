<?php
chdir(dirname(__FILE__) . '/../');

include_once("./config.php");
include_once("./lib/loader.php");
include_once("./lib/threads.php");

set_time_limit(0);

// connecting to database
$db = new mysql(DB_HOST, '', DB_USER, DB_PASSWORD, DB_NAME);

include_once("./load_settings.php");
include_once(DIR_MODULES . "control_modules/control_modules.class.php");

if ($_GET['confirm']) {
 SQLExec("TRUNCATE TABLE phistory");
 SQLExec("TRUNCATE TABLE shouts");
 system('del /F /S /Q "c:\_majordomo\htdocs\debmes\*.*"');
 system('del /F /S /Q "c:\_majordomo\htdocs\backup\*.*"');
 echo "Done.";
} else {
 echo "<a href='?confirm=1' onClick='return confirm(\"Are you sure?\");'>Please confirm!</a>";
}

$db->Disconnect(); // closing database connection
