<?php

class Modelapi_model extends CI_Model
{

	public function add($data)
	{
		$this->db->insert('models', $data);
	}
	public function view()
	{
		$query = $this->db->get('models');
		return $query->result_array();
	}
	public function update($data, $id)
	{
		$this->db->where('modelID', $id);
		$this->db->update('models', $data);
	}
	public function remove($id)
	{
		$data['isDeleted'] = '1';
		$this->db->where('modelID', $id);
		$this->db->update('models', $data);
	}
}

?>