<?php
include "database.php";
include "config.php";
//include "connect.php";
define( "MESSAGE_PATH", 'database/info.txt');
// define("FILE_TXT_PATH", 'database/form2db.txt');
// Function helpers
include "config.php";

include "helpers.php";

// routing for site
include "routing.php";
// business logic
include "controller.php";


