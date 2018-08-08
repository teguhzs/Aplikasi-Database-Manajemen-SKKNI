<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
	private function _render_page($view, $data = null)
	{
		$this->viewdata = (empty($data)) ? $this->data : $data;

		$this->load->view('header.php', $this->viewdata);
		$this->load->view($view, $this->viewdata);
		$this->load->view('footer.php', $this->viewdata);
	}
 
	function index(){
		$data = array(
			'page_title' => 'Data Peserta Berdasarkan Tanggal'
		);
		$this->_render_page('v_laporan.php', $data);
	}

 
}