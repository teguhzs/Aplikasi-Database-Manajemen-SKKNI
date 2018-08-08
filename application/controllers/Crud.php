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
			'page_title' => 'Tambah Data'
		);
		$this->_render_page('v_input.php', $data);
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$skema_sertifikasi = $this->input->post('skema_sertifikasi');
		$tmpt_uji = $this->input->post('tmpt_uji');
		$rekomendasi = $this->input->post('rekomendasi');
		$tanggal_terbit_sertifikasi = $this->input->post('tanggal_terbit_sertifikasi');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$organisasi = $this->input->post('organisasi');
 
		$data = array(
			'nama' => $nama,
			'nik' => $nik,
			'no_hp' => $no_hp,
			'email' => $email,
			'skema_sertifikasi' => $skema_sertifikasi,
			'tmpt_uji' => $tmpt_uji,
			'rekomendasi' => $rekomendasi,
			'tanggal_terbit_sertifikasi' => $tanggal_terbit_sertifikasi,
			'tanggal_lahir' => $tanggal_lahir,
			'organisasi' => $organisasi
			);
		$this->m_data->input_data($data,'tb_peserta');
		redirect('index');
	}
	function edit($kode_peserta){
	$where = array('kode_peserta' => $kode_peserta);
	$data['tampil'] = $this->m_data->edit_data($where,'tb_peserta')->result();
	$this->load->view('v_edit',$data);
	}
	function hapus($kode_peserta){
		$where = array('kode_peserta' => $kode_peserta);
		$this->m_data->hapus_data($where,'tb_peserta');
		redirect('index');
	}
 
}