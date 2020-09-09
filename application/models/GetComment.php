<?php

class GetComment extends CI_Model{
	
	public function getComments(){
		//$data=$this->db->get('myComment');
		//$query="SELECT * FROM myComment";
		//$data=$this->db->query($query);
		$this->db->select('*');
		$this->db->from('myComment');
		$query=$this->db->get();
		$data=array();
		foreach($query->result() as $row)
			$data[]=$row;
		return $data;
}
}
?>