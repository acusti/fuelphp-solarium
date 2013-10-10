# Description

This [Fuel PHP](http://fuelphp.com/) package adds [Solarium](http://www.solarium-project.org/) to your application.

# To Install

1. In the root of your fuel application, run

        git submodule add git://github.com/bgrimes/fuelphp-solarium.git fuel/packages/solarium

2. Open `composer.json` from the root of your fuel application and add this line to the `require` section:

        "solarium/solarium": "[desired-version-id]"

    Where `[desired-version-id]` is whichever version you want to install from [Packagist](https://packagist.org/packages/solarium/solarium). As an example, the current latest stable version as of this writing (October 10, 2013), would be `3.2.0-RC1`.

3. In the root of your fuel application, run

        php composer.phar update

# To Use

This wrapper loads the [Solarium](http://www.solarium-project.org/) library into your project so that you can either autoload the package
in your config file

```php
	 'packages'  => array(
		'parser',
		'solarium',
	 ),
...
	'config'  => array(
		'solarium',
	),

```

or load it on the fly
	
```php
// Load the config from packages/solarium/config/solarium.php
\Config::load('solarium', true); 
\Package::load('solarium');
```

The config file is currently used to store connection information, but you can of course tweak it to suit your
needs for dealing with Solarium.

After the package is loaded you can use it as defined on the [Solarium](http://www.solarium-project.org/) website, for example:

```php
$config = \Config::get('solarium');

// Create a client instance
$client = new \Solarium\Client($config);

...
```
