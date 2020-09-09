<?php

class SaveComment extends CI_Model{
	

	public function saveCmnt()
	{
		$date=new DateTime();
		$date->setTimezone(new DateTimeZone('Europe/Moscow'));
		$date=$date->format('Y-m-d H:i:s');
		
		$data=array(
			'name'=>$this->input->post('Name'),
			'textComment'=>$this->input->post('myComment'),
			'date'=>$date
		);
		if($this->input->post('Name')!='' && $this->input->post('myComment')!=''){
			//$this->db->insert('myComment',$data)
			if($this->db->insert('myComment',$data))
				return true;
		else
		return false;
		}
		return false;
		
	}
}