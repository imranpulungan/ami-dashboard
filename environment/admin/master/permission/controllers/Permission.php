<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Permission
 *
 * Nah jadi ini fungsinya buat extend Permission core
 * Sebenernya udah jadi sih kemaren tapi ada masalah lagi, jadi gimanalah
 *
 * @package		Master
 * @subpackage	Permission
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */
require_once 'Permission_core.php';

class Permission extends Permission_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
