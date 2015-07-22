<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Models extends CI_Controller {

	public function index()
	{
		$this->load->model('models_model');
		$data = array();
		$data['models'] = $this->models_model->view();
		$this->load->view('view', $data);
	}
	public function login()
	{
		
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
			$this->models_model->add($_POST);
		}
		$this->load->view('add');
	}
	public function edit($id)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->load->model('models_model');
			$this->models_model->put($id, $_POST);
		}
		
		$this->load->model('models_model');
		$data = array();
		$data['models'] = $this->models_model->editView($id);
		//die('<pre>'.print_r($data, true));
		$this->load->view('edit', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */