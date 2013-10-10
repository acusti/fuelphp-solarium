<?php

/**
 * Solarium: Integration of Solarium into FuelPHP by providing config and calling Autoloader::register (Solarium library is included in /vendor via PHP Composer)
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
