<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI Smarty
 *
 * Smarty templating for Codeigniter
 *
 * @package   CI Smarty
 * @author      Dwayne Charrington
 * @copyright  2014 Dwayne Charrington and Github contributors
 * @link           http://ilikekillnerds.com
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 * @version     2.0
 */

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('parser');
        $this->smarty->assign("global", $this->config->item('smarty'));
    }

    public function index()
    {
        // Some example data
        $data['title'] = "The Smarty parser works!";
        $data['body']  = "This is body text to show that the Smarty Parser works!";
        
        // Load the template from the views directory
        $this->parser->parse("main.tpl", $data);
    }

    

}
