<?php
/**
 * This file is part of Hydra, the cozy RESTfull PHP5.3 micro-framework.
 *
 * @link        https://github.com/z7/hydra
 * @author      Sandu Lungu <sandu@lungu.info>
 * @package     hydra
 * @subpackage  app
 * @filesource
 * @license     http://www.opensource.org/licenses/MIT MIT
 */

namespace App\Controller;

/**
 * A mockup controller. 
 */
class SampleController {
    
    /**
     * Class constructor. A good place for code to be executed before action.
     */
    function __construct(\Hydra\Request $request) {
        var_dump('Controller created.');
    }
    
    /**
     * @route GET /simple/url html {"defaults":{"id":4}}
     * @route GET somepath/$id:int/$le_param
     */
    function twoWordsAction($id, $le_param = 'default') {
        var_dump('Action executed');
        return "Success, id: $id, param: $le_param.";
    }
    
    /**
     * Class constructor. A good place for code to be executed after action (and before rendering).
     */
    function __destruct() {
        var_dump('Controller destroyed');
    }
}