<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
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

	function index($nama_kolom,$value_kolom)
	{

		$data = array(
			'page_title' => 'Laporan Data Peserta'
		);
		$where = array($nama_kolom => $value_kolom);
		$data['tampil'] = $this->m_data->edit_data($where,'tb_peserta')->result();

		$this->_render_page('v_laporan.php', $data);
	}
}
