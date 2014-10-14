CodeIgniterSmarty
=================

Codeigniter Framework with Smarty Template Engine

##### Smarty Library File

<p>Include above line in controller's contructor function.</p>
<p>$this->load->library('parser');</p>

##### Asset Management

<p>A CDN folder created to include CSS and Script files.
Include above line in controller's contructor function.</p>
<p>$this->smarty->assign("global", $this->config->item('smarty'));</p>


##### Loading Smarty Template

 <p>Instead of using $this->load->view() you now use $this->parser->parse() instead. That's it.</p>

