<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class ModelApi extends REST_Controller {

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
	public function index_get()
	{	
		$query = $this->db->get('models');
		$this->response($query->result_array(), 200);
	}
	public function model_get()
	{
		
		$this->load->model('api/modelapi_model');
		//$this->modelapi_model->view();
		$this->response($this->modelapi_model->view(), 200);
	}
	public function add_post()
	{
		/*$data['name'] = $this->post('name');
		$data['age'] = $this->post('age');
		$data['address'] = $this->post('address');
		$data['fbLink'] = $this->post('fbLink');
		$data['twitterLink'] = $this->post('twitterLink');
		$data['instagramLink'] = $this->post('instagramLink');
		$data['image'] = $this->post('image');
		*/
		$this->load->model('api/modelapi_model');
		//$data = array();
		//$data = $_POST;
		$this->modelapi_model->add($this->post());
		
		$this->response($this->post(), 201);
	}
	public function edit_put($id)
	{
		/*
		$data['name'] = $this->put('name');
		$data['age'] = $this->put('age');
		$data['address'] = $this->put('address');
		$data['fbLink'] = $this->put('fbLink');
		$data['twitterLink'] = $this->put('twitterLink');
		$data['instagramLink'] = $this->put('instagramLink');
		$data['image'] = $this->post('image');
		*/
		$this->load->model('api/modelapi_model');
		$this->modelapi_model->update($this->put(), $id);
		$this->response([
			'returned from update:' => $id,
		]);

	}
	public function remove_delete($id)
	{	
		$this->load->model('api/modelapi_model');
		$this->modelapi_model->remove($id);
		$this->response([
			'returned from remove:' => $id,
		]);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */