Hydra application skeleton
==========================

This is an application for Hydra, the cozy RESTfull PHP5.3 micro-framework. See https://github.com/z7/hydra


Configuration
-------------

There is a main configuration file - /app/config.php, where you can adjust the settings to your likes.

To adjust core config options, you'll have to edit /web/index.php.


/data folder
--------------

You should give web server write access ONLY to this folder and its contents.

The /data/web subfolder will store uploaded files accesible at an address of the form http://example.com/vendor/data/ASSETS


/web folder
-------------

Store all your public assets (images, css, js) there.

If you use 3rd party libraries, use CDN, like https://developers.google.com/speed/libraries/devguide
If there is no CDN for your lib, then drop it in it's own /web/vendor/LIBRARY-NAME subfolder.

If you need to serve dynamic assets, append a '.php' extension.

Example: to serve a http://example.com/js/dynamic.js?foo=bar create a /web/js/deynamic.js.php file like this:

<?php
    // Do not allow direct requests.
    if (empty($app)) {
        header('HTTP/1.1 404 Not Found');
        die('// Page not found');
    }
    $response->expires(60 * 60 * 24, true); // cache response for 1 day
?>
alert(<?php echo json_encode((string)$request->query['foo']) ?>);


/app/src subfolder
---------------

Store hooks in directly in src folder.

Store all application classes here.

IMPORTANT: Use App namespace.
For example, a \App\Controller\SampleController class should be stored in src/App/Controller/SampleController.php.


/app/views subfolder
-----------------

Store all your Twig views here.


/app/plugins subfolder
----------------------------------

Store 3rd party Hydra plugins here
Each plugin may contain the following:

* src/ folder with classes.
    The plugin is responsable for registering classes with autoloader. 
    If it provides public controllers, routes should be explicitly registered as well.

* web/ folder with web assets, accesible at http://example.com/plugins/PLUGIN-NAME/ASSETS
    3rd party libraries should be placed in a web/vendor/ subfolders.

* hooks/ folder with any number of *.hook.php files (auto-detected).
* views/ folder (templates should be explicitly registered).
* vendor/ PHP libraries.
* README.md file.
* composer.json file if the plugin has PHP dependecies (see vendor/ libs).

Plugins may be nested in subfolder, but in this case the "web" directory should be served by the plugin itself.


IDE integration
---------------

If you have method or service declarations in your hook files,
create src/ide_helper.php file with php docs describing your method signatures. 
