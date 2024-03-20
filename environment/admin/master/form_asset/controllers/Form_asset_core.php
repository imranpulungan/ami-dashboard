<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Master Controller
 *
 * Nah jadi ini fungsinya buat dipanggil di class utamanya nanti
 * Kenapa sih kok ribet? sebenernya enggak
 * cuman buat kalo ada yang nyoba utak atik codingnya tapi gak tau konsepnya bisa setres
 *
 * @package		User Core
 * @subpackage	User Core
 * @author		Alimstudio
 * @link		http://alimstudio.com
 */

class Form_asset_core extends CI_Controller
{
    private $success = false;
    private $errors = null;
    private $data = null;

    private $bearerToken;


    public function __construct()
    {
        parent::__construct();
        $this->bearerToken = $this->input->get_request_header('Authorization');
    }

    public function insert()
    {
        $generate_time = time();
        
        // if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            $data['asset_number']               = $this->input->post('asset_number');            
            $data['asset_type']                 = htmlspecialchars_decode($this->input->post('asset_type'));
            $data['asset_plant']                = $this->input->post('asset_plant');
            $data['asset_size']                 = $this->input->post('asset_size');
            $data['asset_description']          = $this->input->post('asset_description');
            $data['acq_value']                  = $this->input->post('asset_acq');
            $data['capitalized_on']             = $this->input->post('asset_capitalized_on');
            $data['useful_life']                = $this->input->post('asset_useful');
            $data['accumulated_depreciation']   = $this->input->post('asset_accumulated');
            $data['book_value']                 = $this->input->post('book_value');
            $data['cost_center']                = $this->input->post('asset_cost_center');
            $data['coordinate']                 = $this->input->post('asset_coordinate');
            $data['map_link']                   = $this->input->post('asset_mapslink');
            $data['additional_description']     = $this->input->post('additional_description');         
            // var_dump($data);die;
            
            
            $maxsize = 3145728;  //3MB; 2MB -> 2097152                             
            
            if (isset($_FILES['asset_image'])) {
                if ($_FILES['asset_image']['size'] >= $maxsize) {
                    http_response_code(400);
                    echo "Ukuran Gambar terlalu besar";
                    return;                    
                }
                
                $data['asset_image'] = $this->UploadFile($_FILES['asset_image'], "asset");
            } else {
                http_response_code(400);
                echo "Gambar Aset wajib disertakan ya";
                return;
            }
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . $this->bearerToken
                )
            );            

            $result = $this->api->post(getEnvi('schema') . '/master/asset', $data, false);
            var_dump($result);die;
            if (isset($result->success) && $result->success) {
                http_response_code(200);
                echo "Berhasil Simpan Aset";
            } else {
                http_response_code(400);
                echo "Gagal Simpan Aset";              
            }
        // } else {
        //     error_404();
        // }
    }

    public function update()
    {
        $generate_time = time();

        // if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['asset_number']               = $this->input->post('asset_number');            
            $data['asset_type']                 = htmlspecialchars_decode($this->input->post('asset_type'));
            $data['asset_plant']                = $this->input->post('asset_plant');
            $data['asset_size']                 = $this->input->post('asset_size');
            $data['asset_description']          = $this->input->post('asset_description');
            $data['acq_value']                  = $this->input->post('asset_acq');
            $data['capitalized_on']             = $this->input->post('asset_capitalized_on');
            $data['useful_life']                = $this->input->post('asset_useful');
            $data['accumulated_depreciation']   = $this->input->post('asset_accumulated');
            $data['book_value']                 = $this->input->post('book_value');
            $data['cost_center']                = $this->input->post('asset_cost_center');
            $data['coordinate']                 = $this->input->post('asset_coordinate');
            $data['additional_description']     = $this->input->post('additional_description');         
            
            $maxsize = 3145728;  //3MB; 2MB -> 2097152                             
            
            if (isset($_FILES['asset_image'])) {
                if ($_FILES['asset_image']['size'] >= $maxsize) {
                    http_response_code(400);
                    echo "Ukuran Gambar Aset terlalu besar";                    
                    return;                    
                }
                
                $data['asset_image'] = $this->UploadFile($_FILES['asset_image'], "asset");
            }
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . $this->bearerToken
                )
            );   

            $result = $this->api->put(getEnvi('schema') . '/master/asset', $data, true);
            if (isset($result->success) && $result->success) {      
                http_response_code(200);                          
            } else {
                http_response_code(400);                
            }
        // } else {
        //     error_404();
        // }
    }

    public function UploadFile($file, $type)
    {
        $uploadFile   = $file['tmp_name'];

        if (!empty($uploadFile)) {
            $generate_time  = $type . "_" . time();
            $ext            = pathinfo($file['name'], PATHINFO_EXTENSION);
            $dirPath        = "upload/image/";

            if (move_uploaded_file($uploadFile, $dirPath . $generate_time . "." . $ext)) {
                $namefile = $generate_time . "." . $ext;
                return $namefile;
            }
        }

        return null;
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */