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

class Asset_core extends CI_Controller
{
    private $view;

    public function __construct()
    {
        parent::__construct();
        Initialized();
    }

    public function index()
    {
        isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('asset');
            $this->view['content']    = 'master/asset/v_asset';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                // 'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'asset'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function add()
    {
        isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('asset');
            $this->view['content']    = 'master/add_asset/v_add_asset';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                // 'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'                
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'add_asset'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function edit($id)
    {
        // isHasAccessToModule();
        if (!isHeader404()) {
            
            $this->view['title']      = getLangKey('asset');
            $this->view['content']    = 'master/add_asset/v_add_asset';
            $this->view['css']    = [
                'libs/datatables/css/dataTables.bootstrap5.min.css',
                'libs/datatables/css/responsive.bootstrap.min.css',
                'libs/datatables/css/buttons.dataTables.min.css',
                'libs/select2/css/select2.min.css'
            ];
            $this->view['javascript'] = [
                // 'libs/datatables/js/jquery-3.6.0.min.js',
                'libs/datatables/js/jquery.dataTables.min.js',
                'libs/datatables/js/dataTables.bootstrap5.min.js',
                'libs/datatables/js/dataTables.responsive.min.js',
                'libs/datatables/js/dataTables.buttons.min.js',
                'libs/select2/js/select2.min.js'                
            ];

            $this->view['java'] = [
                'path' => 'master',
                'file' => 'add_asset'
            ];

            loadTemplate('layout', $this->view);
        }
    }

    public function detail()
    {
        if ($this->input->get('scrty') == true && hasOwnProgram()) {
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/asset?asset_number=' . $this->input->get("asset_number"), null, false, $headers));
        } else {
            error_404();
        }
    }

    public function load()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['role'] = getSession('role');            
            $headers = array(
                'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                'Authorization:' . getSession('token')
            );
            echo base64_encode($this->api->getData(getEnvi('schema') . '/master/asset/list', $data, false, $headers));
        } else {
            error_404();
        }
    }

    public function insert()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {            
            $data['asset_number']               = $this->input->post('asset_number');            
            $data['asset_type']                 = $this->input->post('asset_type');            
            $data['asset_plant']                = $this->input->post('asset_plant');
            $data['asset_size']                 = $this->input->post('asset_size');
            $data['asset_description']          = $this->input->post('asset_description');
            $data['acq_value']                  = $this->input->post('asset_acq');
            $data['capitalized_on']             = $this->input->post('asset_capitalized_on');
            $data['useful_life']                = $this->input->post('asset_useful');
            $data['accumulated_depreciation']   = $this->input->post('asset_accumulated');
            $data['cost_center']                = $this->input->post('asset_cost_center');
            $data['coordinate']                 = $this->input->post('asset_coordinate');
            $data['map_link']                   = $this->input->post('asset_mapslink');
            $data['additional_description']     = $this->input->post('additional_description');
            $data['book_value']                 = $this->input->post('book_value');            
            
            $img_asset_base64 = $this->input->post('img_asset_base64');    

            if (empty($img_asset_base64)) {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_add_failed_header'),
                    'message' => "Gambar Aset Wajib disertakan"
                ]);
                return;
            } 

            $data['asset_image'] = $this->uploadImageBase64("FA", "upload/image/", $img_asset_base64, $data['asset_number']);

            // $maxsize = 3145728;  //3MB; 2MB -> 2097152                             
            
            // if (isset($_FILES['asset_image'])) {
            //     if ($_FILES['asset_image']['size'] >= $maxsize) {
            //         echo json_encode([
            //             'status' => false,
            //             'header' => getLangKey('asset_add_failed_header'),
            //             'message' => 'Ukuran Gambar Aset terlalu besar'
            //         ]);
            //         // return;                    
            //     }
                
            //     $data['asset_image'] = $this->UploadFile($_FILES['asset_image'], "asset_");
            // } else {
            //     echo json_encode([
            //         'status' => false,
            //         'header' => getLangKey('asset_add_failed_header'),
            //         'message' => 'Gambar Aset wajib disertakan'
            //     ]);
            //     // return;
            // }

            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );            

            $result = $this->api->post(getEnvi('schema') . '/master/asset', $data);                    
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_add_success_header'),
                    'message' => getLangKey('asset_add_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_add_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function insert_json()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            // Allowed mime types
            $fileMimes = array(
                'text/x-comma-separated-values',
                'text/comma-separated-values',
                'application/octet-stream',
                'application/vnd.ms-excel',
                'application/x-csv',
                'text/x-csv',
                'text/csv',
                'application/csv',
                'application/excel',
                'application/vnd.msexcel',
                'text/plain'
            );


            if (!empty($_FILES['file_csv']['name']) && in_array($_FILES['file_csv']['type'], $fileMimes)) {
                $array_data = [];

                // Set delimiter
                $delimiter = ";";

                // Open uploaded CSV file with read-only mode
                $csvFile = fopen($_FILES['file_csv']['tmp_name'], 'r');

                ini_set('auto_detect_line_endings', true);
                // Skip the first line
                fgetcsv($csvFile);

                // Parse data from CSV file line by line
                
                while (($getData = fgetcsv($csvFile, 0, $delimiter)) !== FALSE) {
                    $data['asset_number']               = $getData[0];
                    $data['asset_type']                 = $getData[1];
                    $data['asset_plant']                = $getData[2];
                    $data['asset_size']                 = $getData[3];
                    $data['asset_description']          = $getData[4];
                    $data['acq_value']                  = $getData[5];
                    $data['accumulated_depreciation']   = $getData[6];
                    $data['book_value']                 = $getData[7];
                    $data['capitalized_on']             = $getData[8];
                    $data['useful_life']                = $getData[9];
                    $data['cost_center']                = $getData[10];
                    $data['business']                   = $getData[11];
                    $data['additional_description']     = $getData[12];
                    $data['coordinate']                 = !empty($getData[13]) ? str_replace(" ",",", str_replace(",",".", $getData[13])) : ""; 
                    $data['map_link']                   = $getData[14]; 
                    $data['asset_image']                = $getData[15];
                    array_push($array_data, $data);

                    // if (isset($result) && $result->success) {
                    //     $berhasil++;
                    // } else {
                    //     array_push($gagal, $i);
                    // }
                }

                // Close opened CSV file
                fclose($csvFile);
            }

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );     

            $json['json'] = base64_encode(json_encode($array_data));
            $result = $this->api->post(getEnvi('schema') . '/master/asset/json', $json, true, true);                
            
            if (isset($result) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'success' => true,
                    'header' => getLangKey('asset_add_success_header'),
                    'message' => getLangKey('asset_add_success_message'),
                    'data' => [
                        'sukses' => true,
                        'berhasil' => $result->data,
                        // 'gagal' => implode(', ', json_decode($result->error))
                    ]
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'success' => false,
                    'header' => getLangKey('asset_add_failed_header'),
                    'message' => getLangKey('asset_add_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function update()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['asset_number']               = $this->input->post('asset_number');            
            $data['asset_type']                 = $this->input->post('asset_type');            
            $data['asset_plant']                = $this->input->post('asset_plant');
            $data['asset_size']                 = $this->input->post('asset_size');
            $data['asset_description']          = $this->input->post('asset_description');
            $data['acq_value']                  = $this->input->post('asset_acq');
            $data['capitalized_on']             = $this->input->post('asset_capitalized_on');
            $data['useful_life']                = $this->input->post('asset_useful');
            $data['accumulated_depreciation']   = $this->input->post('asset_accumulated');
            $data['cost_center']                = $this->input->post('asset_cost_center');
            $data['coordinate']                 = $this->input->post('asset_coordinate');
            $data['map_link']                   = $this->input->post('asset_mapslink');         
            $data['additional_description']     = $this->input->post('additional_description');
            $data['book_value']                 = $this->input->post('book_value');
            
            $img_asset_base64 = $this->input->post('img_asset_base64');    

            if (!empty($img_asset_base64)) {                
                $data['asset_image'] = $this->uploadImageBase64("FA", "upload/image/", $img_asset_base64, $data['asset_number']);
                
                // $old_image = "upload/image/".$this->input->post('old_image');
                // if (file_exists($old_image)) unlink($old_image);            
            } 
            
            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );        
            $result = $this->api->put(getEnvi('schema') . '/master/asset', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_edit_success_header'),
                    'message' => getLangKey('asset_edit_success_message'),
                    'data' => json_encode($data)
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_edit_failed_header'),
                    'message' => $result->error
                ]);
            }
        } else {
            error_404();
        }
    }

    public function update_status()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['asset_number'] = $this->input->post('id');
            $data['status'] = $this->input->post('status');

            $this->api->set_headers(
                array(
                    'X-API-TOKEN:' . getEnvi('API_TOKEN'),
                    'X-APP-KEY:' . getEnvi('API_APP_KEY'),
                    'Authorization:' . getSession('token'),
                )
            );   
            $result = $this->api->put(getEnvi('schema') . '/master/asset/status', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_status_success_header'),
                    'message' => getLangKey('asset_status_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_status_failed_header'),
                    'message' => getLangKey('asset_status_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function delete()
    {
        if ($this->input->post('scrty') == true && hasOwnProgram()) {
            $data['asset_number'] = $this->input->post('asset_number');            
            $result = $this->api->delete(getEnvi('schema') . '/master/asset', $data, true);
            if (isset($result->success) && $result->success) {
                echo json_encode([
                    'status' => true,
                    'header' => getLangKey('asset_delete_success_header'),
                    'message' => getLangKey('asset_delete_success_message')
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'header' => getLangKey('asset_delete_failed_header'),
                    'message' => getLangKey('asset_delete_failed_message')
                ]);
            }
        } else {
            error_404();
        }
    }

    public function category(){
        $data['role'] = getSession('role');            
        $headers = array(
            'X-API-TOKEN:' . getEnvi('API_TOKEN'),
            'X-APP-KEY:' . getEnvi('API_APP_KEY'),
            'Authorization:' . getSession('token')
        );
        echo base64_encode($this->api->getData(getEnvi('schema') . '/master/categoryasset', $data, false, $headers));        
    }

    public function plant(){
        $data['role'] = getSession('role');            
        $headers = array(
            'X-API-TOKEN:' . getEnvi('API_TOKEN'),
            'X-APP-KEY:' . getEnvi('API_APP_KEY'),
            'Authorization:' . getSession('token')
        );
        echo base64_encode($this->api->getData(getEnvi('schema') . '/master/plantasset', $data, false, $headers));        
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

    private function uploadImageBase64($time, $path, $img_base64, $key) {
        $image_array_1 = explode(";", $img_base64);
        $image_array_2 = explode(",", $image_array_1[1]);
        $file = base64_decode($image_array_2[1]);
        $filename = "${time}_${key}.png";
        $path = $path . $filename;
        file_put_contents($path, $file);

        return $filename;
    }
}



/* End of file Master_core.php */
/* Location: ./application/modules/Master/controllers/Master_core.php */