<?php 
class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->database();
		//$this->db->cache_on();
		$data['posts'] = $this->db->get('posts')->result();
		//$this->db->cache_off();
		$this->load->view('home_view',$data);
	}

}
