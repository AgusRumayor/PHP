<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/
/*$hook['pre_controller'][] = array(
                                'class'    => 'Scaffolding1',
                                'function' => 'Scaffolding1',
                                'filename' => 'Scaffolding1.php',
                                'filepath' => 'hooks',
                                'params'   => $db_table
                                );
*/
$hook['pre_controller'][] = array(
                                'class'    => 'Prueba',
                                'function' => 'Prueba',
                                'filename' => 'Prueba.php',
                                'filepath' => 'hooks'
                                //'params'   => array('hola')
                                );

?>