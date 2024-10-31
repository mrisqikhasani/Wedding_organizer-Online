<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Upsss</strong> Anda tidak memiliki Akses, silahkan login!</div>');
            redirect('login');
        }

        $this->load->model('settings_model');

    }

	public function index()
	{
        $data = array(
            'title' => 'JewePe Wedding Organizer',
            'page' => 'admin/settings',
            'settings' => $this->settings_model->getSettings('1')->row()
        );

		$this->load->view('admin/template/main', $data);
	}

    public function updateData()
    {
        $post = $this->input->post();
        
        // var_dump($post);
        // die;

        if($post){
            $cek_id = $this->settings_model->getSettings($post['id'])->num_rows();

            if($cek_id > 0) {
                $getSettings = $this->settings_model->getSettings($post['id'])->row();
                $fileName = date('Ymd').'_'.rand();

                $datetime = date("Y-m-d H:i:s");
                $data = array(
                    'website_name' => $post['website_name'],
                    'phone_number1' => $post['phone_number1'],
                    'phone_number2' => $post['phone_number2'],
                    'email1' => $post['email1'],
                    'email2' => $post['email2'],
                    'address' => $post['address'],
                    'maps' => $post['maps'],
                    'facebook_url' => $post['facebook_url'],
                    'instagram_url' => $post['instagram_url'],
                    'youtube_url' => $post['youtube_url'],
                    'header_bussiness_hour' => $post['header_bussiness_hour'],
                    'time_bussiness_hour' => $post['time_bussiness_hour'],
                    'update_at' => $datetime
                );

                if(!empty($_FILES['logo']['name'])) {
                    // delete file 
                    if(file_exists('./assets/files/'. $getSettings->logo) && $getSettings->logo)
                       unlink('./assets/files/'.$getSettings->logo);

                    $upload = $this->_do_upload($fileName);
                    $data['logo'] = $upload;
                }

                $update = $this->settings_model->update($post['id'], $data);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success</strong>Data Berhasil di Update!<i class="remove ti-close" data-dismiss="alert"></i></div>');
                    redirect('admin/Settings');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Upps!</strong>Data Gagal di Update!<i class="remove ti-close" data-dismiss="alert"></i></div>');
                    redirect('admin/Settings');    
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Upps!</strong>Maaf ID Tidak ditemukan.<i class="remove ti-close" data-dismiss="alert"></i></div>');
                redirect('admin/Settings');
            }  

        } else {
            redirect('admin/settings');
        }
    }

    private function _do_upload($fileName)
    {
        $config['file_name']        = $fileName;
        $config['upload_path']      = './assets/files';
        $config['allowed_types']    = 'gif|jpg|jpeg|png|PNG|JPG|JPGE';
        $config['max_size']         = 5000; //set max allowed in Kilobytes
        $config['create_thumb']     = FALSE; 
        $config['quality']          = '90%'; 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('logo')) //upload and validate
        {
            $data['inputerror'][] = 'logo';
            $data['error_string'][] = 'Upload error' . $this->upload->display_errors('', '');
            $data['status'][] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}
?>