<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Role
 *
 * Nah jadi ini fungsinya buat extend jenis dokumen core
 * Sebenernya udah jadi sih kemaren tapi ada masalah lagi, DAMAGESjadi gimanalah
 *
 * @package		Role
 * @subpackage	Role
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */
require_once 'Role_core.php';

class Role extends Role_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
