<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User
 *
 * Nah jadi ini fungsinya buat extend jenis dokumen core
 * Sebenernya udah jadi sih kemaren tapi ada masalah lagi, DAMAGESjadi gimanalah
 *
 * @package		User
 * @subpackage	User
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */
require_once 'User_core.php';

class User extends User_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
