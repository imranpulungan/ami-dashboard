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
require_once 'Form_asset_core.php';

class Form_asset extends Form_asset_core
{

    public function __construct()
    {
        parent::__construct();
    }
}
