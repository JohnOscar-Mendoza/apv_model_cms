<?php

class Models_model extends CI_Model
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
}

?>