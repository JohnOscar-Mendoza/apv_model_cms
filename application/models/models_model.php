<?php

class Models_model extends CI_Model
{

public function add($data)
	{
		$postvars = '';
		foreach($data as $key=>$value) 
		{
			$postvars .= $key . "=" . $value . "&";
		}
		//die($postvars);
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_URL => 'http://localhost:777/apv_model_cms/index.php/api/modelapi/add',
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $postvars,
			)
		);
		
		$resp = curl_exec($curl);

		curl_close($curl);
	}
	public function view()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:777/apv_model_cms/index.php/api/modelapi/model',
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true
		));
		$resp = curl_exec($curl);
		$json = json_decode($resp, true);
		//die('<pre>'.print_r($json, true));
		curl_close($curl);
		return $json;
	}
	public function put($data)
	{
		$this->db->where('modeID', $id);
		$this->db->update('models', $data);
	}
}

?>