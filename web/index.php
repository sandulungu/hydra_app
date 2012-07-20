<?php
/**
 * Front-end controller. 
 *
 * This file is part of Hydra, the cozy RESTfull PHP5.3 micro-framework.
 *
 * @link        https://github.com/z7/hydra
 * @author      Sandu Lungu <sandu@lungu.info>
 * @package     hydra
 * @subpackage  core
 * @filesource
 * @license     http://www.opensource.org/licenses/MIT MIT
 */

error_reporting(E_ALL);

// Download latest Hydra distro.
if (!file_exists('../hydra/hydra.phar')) {
    is_dir('../hydra') || mkdir('../hydra');
    file_put_contents('../hydra/hydra.phar', file_get_contents('https://github.com/z7/hydra/raw/master/hydra.phar'));
}

// Register autoloader.
$autoloader = require_once 
    file_exists('../hydra/vendor/autoload.php') ? '../hydra/vendor/autoload.php' : 
    '../hydra/hydra.phar';

// Initialize your application. 
// Optionally, provide an array of core configuration options.
$app = \Hydra\App::getInstance($autoloader, array('debug' => true));

// You may define your app code here.
// $app->route('GET', $pattern, function($param, ...) { ... });

$app->run();
