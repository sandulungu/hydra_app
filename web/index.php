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

// Register autoloader.
if (file_exists('../vendor/autoload.php')) {
    // Either use composer (the recommended way when using 3rd party plugins).
    $autoloader = require_once '../vendor/autoload.php';
} else{
    // Or download the latest Hydra distro.
    file_exists('../hydra.phar') || file_put_contents('../hydra.phar', file_get_contents('https://github.com/z7/hydra/raw/master/hydra.phar'));
    $autoloader = require_once '../hydra.phar';
}

// Initialize your application. 
// Optionally, provide an array of core configuration options.
$app = \Hydra\App::getInstance($autoloader, array('debug' => true));

// You may define your app code here.
// $app->route('GET', $pattern, function($param, ...) { ... });

$app->run();
