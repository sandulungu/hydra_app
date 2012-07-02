<?php
/**
 * Application configuration file.
 * 
 * You can override here any configuration settings. 
 * Setting values in this file is equivalent to using an ['app.config'][0] hook.
 * 
 * This file is part of Hydra, the cozy RESTfull PHP5.3 micro-framework.
 *
 * @link        https://github.com/z7/hydra
 * @author      Sandu Lungu <sandu@lungu.info>
 * @package     hydra
 * @subpackage  app
 * @filesource
 * @license     http://www.opensource.org/licenses/MIT MIT
 */

// Uncomment, to get a list of all defaults:
//var_dump($config);



// =============================================================================
// WARNING: Do not override $config['security'] defaults bellow if you don't know exactly what you're doing.

// If you don't need to embed your site in an iframe you should never disable this.
// If this is a FaceBook app or something similar consider using smt like "Allow-From https://apps.facebook.com/YOUR-APP-ID"
// http://en.wikipedia.org/wiki/Clickjacking
$config['security']['headers']['X-Frame-Options'] = 'sameorigin';

// Helps prevent attacks based on MIME-type confusion. 
// http://msdn.microsoft.com/en-us/library/ie/gg622941%28v=vs.85%29.aspx
$config['security']['headers']['X-Content-Type-Options'] = 'nosniff'; 

// Goes one step further in preventing query XSS exploits.
// http://www.enhanceie.com/test/xss/BlockMode.asp
$config['security']['headers']['X-XSS-Protection'] = '1;mode=block';
