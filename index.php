<?php

// absolute filesystem path to the web root
define('WWW_DIR', dirname(__FILE__));

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/app');

// absolute filesystem path to the libraries
define('LIBS_DIR', WWW_DIR . '/app/lib');

// absolute path to XML configuration files
define('XML_DIR', WWW_DIR . '/xml');


// load bootstrap file
require APP_DIR . '/bootstrap.php';
