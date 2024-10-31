<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('settings_model');
    }

	public function index()
	{
        $data = array(
            'title' => 'JewePe Wedding Organizer',
            'page' => 'landing/about',
            'getDataWeb' => $this->settings_model->getSettings('1')->row()
        );

		$this->load->view('landing/template/sites', $data);
	}
}
?>