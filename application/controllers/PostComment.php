<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PostComment extends CI_Controller
{
	
	public function myCmnt(){
		$this->load->helper('url');
		$this->load->model('SaveComment');
		
		if($this->SaveComment->saveCmnt())
			$data="Ваша комментария успешно записана в БД";
		else
			$data="Возникла ошибка при записе в БД";
		echo json_encode($data);
		//$this->load->view('welcome_message.php');
	}
	public function getCmnt()
	{
		$this->load->model('GetComment');
		$data=$this->GetComment->getComments();
		echo json_encode($data);
	}
}
?>