<?php

/**
 * Solarium: Add support for connection config in FuelPHP for the Solarium Solr library
 * 
 * The Solarium library files are included in /vendor via PHP Composer and loaded by Composer's autoload.php
 *
 * @package	  FuelPHP Solarium
 * @version	  v0.0.1
 * @author	  Andrew Patton
 * @license	  MIT License
 */

return array(
	// Endpoints (use to define multiple solr servers or cores)
	'endpoint' => array(
		// Server information
		'localhost' => array(
			'host' => '127.0.0.1',
			'port' => 8983,
			'path' => '/solr/',
		),
	),
);
