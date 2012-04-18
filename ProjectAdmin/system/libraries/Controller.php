<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class the every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class Controller extends CI_Base {

	var $_ci_scaffolding	= FALSE;
	var $_ci_scaff_table	= FALSE;
	var $_ci_scaffolding_1	= FALSE;
	var $_ci_scaff_table_1	= FALSE;
	
	/**
	 * Constructor
	 *
	 * Calls the initialize() function
	 */
	function Controller()
	{	
		parent::CI_Base();
		$this->_ci_initialize();
		log_message('debug', "Controller Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize
	 *
	 * Assigns all the bases classes loaded by the front controller to
	 * variables in this class.  Also calls the autoload routine.
	 *
	 * @access	private
	 * @return	void
	 */
	function _ci_initialize()
	{
		// Assign all the class objects that were instantiated by the
		// front controller to local class variables so that CI can be
		// run as one big super object.
		$classes = array(
							'config'	=> 'Config',
							'input'		=> 'Input',
							'benchmark'	=> 'Benchmark',
							'uri'		=> 'URI',
							'output'	=> 'Output',
							'lang'		=> 'Language'
							);
		
		foreach ($classes as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		// In PHP 5 the Loader class is run as a discreet
		// class.  In PHP 4 it extends the Controller
		if (floor(phpversion()) >= 5)
		{
			$this->load =& load_class('Loader');
			$this->load->_ci_autoloader();
		}
		else
		{
			$this->_ci_autoloader();
			
			// sync up the objects since PHP4 was working from a copy
			foreach (array_keys(get_object_vars($this)) as $attribute)
            {
                if (is_object($this->$attribute))
                {
                    $this->load->$attribute =& $this->$attribute;
                }
            }
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Run Scaffolding
	 *
	 * @access	private
	 * @return	void
	 */	
function _ci_scaffolding()
    {
        if ($this->_ci_scaffolding === FALSE OR $this->_ci_scaff_table === FALSE)
        {
            show_404('Scaffolding unavailable');
        }
        
        $commands = array('add', 'insert', 'edit', 'update', 'view', 'delete', 'do_delete');
        $method = ( in_array($this->uri->segment(3), $commands, TRUE)) ? $this->uri->segment(3) : NULL;
        $segment1 = 1;
        $segment2 = 2;
        
        if($method == NULL):
            $method = ( in_array($this->uri->segment(4), $commands, TRUE) ) ? $this->uri->segment(4) : 'view';
            $segment1 = 2;
            $segment2 = 3;
        endif;
        
        require_once(BASEPATH.'scaffolding/Scaffolding'.EXT);
        $scaff = new Scaffolding($this->_ci_scaff_table, $segment1, $segment2);
        $scaff->$method();
    } 
	/*scaffolding1

	function _ci_scaffolding_1()
    {
        if ($this->_ci_scaffolding_1 === FALSE OR $this->_ci_scaff_table_1 === FALSE)
        {
            show_404('Scaffolding_1 unavailable');
        }
        
        $commands = array('add', 'insert', 'edit', 'update', 'view', 'delete', 'do_delete');
        $method = ( in_array($this->uri->segment(3), $commands, TRUE)) ? $this->uri->segment(3) : NULL;
        $segment1 = 1;
        $segment2 = 2;
        
        if($method == NULL):
            $method = ( in_array($this->uri->segment(4), $commands, TRUE) ) ? $this->uri->segment(4) : 'view';
            $segment1 = 2;
            $segment2 = 3;
        endif;
        
        require_once(BASEPATH.'scaffolding_1/Scaffolding_1'.EXT);
        $scaff = new Scaffolding_1($this->_ci_scaff_table_1, $segment1, $segment2);
        $scaff->$method();
    }*/ 
}
// END _Controller class
?>