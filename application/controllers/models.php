<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Models extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('models_model');
		$data = array();
		$data['models'] = $this->models_model->view();
		$this->load->view('view', $data);
		
		
	}
	public function view()
	{
		$this->load->model('models_model');
		$data = array();
		$data['models'] = $this->models_model->view();
		$this->load->view('view', $data);
		
		
	}
	public function add()
	{
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('models_model');
			$data = array();
			$data = $_POST;
			$this->models_model->add($data);
		}
		else
		{ $this->load->view('add'); }
	}
	public function edit()
	{
		//$this->load->model('models_model');
		//$data = array();
		//$data['models'] = $this->models_model->view();
		$this->load->view('edit');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */