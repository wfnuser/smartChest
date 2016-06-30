<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Shanghai');
class Chest extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->id){
			redirect('');
		}
    }


	public function index(){
		$this->load->view('header');
		$this->load->view('channel_act');
		$this->load->view('footer');
	}


	public function display($ch_id=0,$select=0,$state=0){


			$this->load->view('header');		
			$this->load->view('display_chest');
			$this->load->view('footer');


	}
	//不可以先select再排除 否则会有漏选


	//活动列表ajax
	public function display_ajax($ch_id=0, $page=1){
		$this->load->model('chest_model');
		if($data['row'] = $this->chest_model->display_ajax($ch_id, $page)){
			var_dump($data['row']);
			for($i=0; $i<count($data['row']); $i++){
				$r = $data['row'][$i];
				$data['row'][$i]['a_state'] = $this->modifya_state($r['deadline'], $r['start_time'], $r['end_time'], $r['a_state'], $r['a_id']);
			}
			//json code to echo


		}
		else{
			echo "no more activities";
		}
	}


	//发布账单
	public function submit(){
		if($this->input->method()=='get'){
			$this->load->view('header');
			$this->load->view('submit_chest');
			$this->load->view('footer');
		}else{
			//echo $_POST['Title'];
			// $this->load->model('chest_model');
			// if($chest_id = $this->chest_model->submit()){
			// 	// echo "success";
			// 	$url = base_url("");
			// 	echo "<script>alert('success');windows.location.href="."'".$url."'"." </script>";

			// }
			// else{

				$url = base_url("index.php");
				echo "<script>alert('success');windows.location.href="."'".$url."'"." </script>";

			// }
			
		}
		
	}

	
	//详细账单内容
	public function detail($a_id=1){
		$this->load->model('chest_model');
		if($data = $this->chest_model->detail(intval($a_id))){
			//var_dump($data);
			$this->load->view('header');		
			$this->load->view('detail_chest',$data);
			//$this->load->view('footer');
		}
				
	}





}
