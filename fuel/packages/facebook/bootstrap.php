<?php

Autoloader::add_core_namespace('Email');

Autoloader::add_classes(array(
	/**
	 * Email classes.
	 */
	'Facebook\\Facebook'							=> __DIR__.'/classes/facebook.php',
));