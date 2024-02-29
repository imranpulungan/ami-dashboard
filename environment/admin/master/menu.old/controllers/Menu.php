<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Menu
 *
 * Nah jadi ini fungsinya buat extend menu core
 * Sebenernya udah jadi sih kemaren tapi ada masalah lagi, jadi gimanalah
 *
 * @package		Master
 * @subpackage	Menu
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */
require_once 'Menu_core.php';

class Menu extends Menu_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
