# Steam Locomotive

Steam Locomotive is a PHP library that you can use to easily access Steam Web API.
It also contains some useful tools such as Steam ID converters, validators, etc.

## Configuration
1. Get your Steam API key from https://steamcommunity.com/dev/apikey
2. Set STEAM_API_KEY constant in *config-sample.php*
3. Change name of *config-sample.php* to *config.php*

## Usage
    // Step 1:
    require 'locomotive.php';
    // Step 2:
    $loco_lib = new Locomotive();
   
## Requirements
* PHP 5
* [cURL](http://php.net/manual/en/book.curl.php)