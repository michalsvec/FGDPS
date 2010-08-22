<?php

function pr($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

// Step 1: Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
require LIBS_DIR . '/Nette/loader.php';



// Step 2: Configure environment
// 2a) enable Debug for better exception and error visualisation
Debug::enable();


// 2b) load configuration from config.ini file
Environment::loadConfig();



// Step 3: Configure application
// 3a) get and setup a front controller
$application = Environment::getApplication();



// Step 4: Setup application router
$router = $application->getRouter();

// mod_rewrite detection
if (function_exists('apache_get_modules') && in_array('mod_rewrite', apache_get_modules())) {

	Route::addStyle('lang', NULL);
	Route::setStyleProperty('lang', Route::PATTERN, '[a-z0-9]{1,3}');

	$router[] = new Route('index.php', array(
		'lang' => 'cz',
		'presenter' => 'About',
		'action' => 'default',
		'id' => NULL
	), Route::ONE_WAY);

	$router[] = new Route('<lang>/<presenter>/<action>/<id>',array(
		'lang' => 'cz',
		'presenter' => 'About',
		'action' => 'default',
		'id' => NULL
	));

	$router[] = new Route('<presenter>/<action>/<id>',array(
		'lang' => NULL,
		'presenter' => 'About',
		'action' => 'default',
		'id' => NULL
	),Route::ONE_WAY);

} else {
	$router[] = new SimpleRouter('About:default');
}

// Step 5: Run the application!
$application->run();
