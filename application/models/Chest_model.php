<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chest_model extends CI_Model {


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	public function detail($a_id){
		
			//获取账单基本信息
			$sql = "SELECT a_id,u_id,user.name,a_name,deadline,create_time,start_time,end_time,extra,place,max_num,join_num,t_name,a_state,browse,a_like,share 
				FROM act,type,user WHERE act.t_id=type.id and user.id=act.u_id and act.a_id=? limit 1";
			$query1 = $this->db->query($sql, array($a_id));
			
			//获取账单参与者信息
			$sql = "SELECT user.nname,user.id FROM user WHERE user.id in (SELECT act_man.u_id FROM act,act_man WHERE act.a_id=act_man.a_id and act.a_id=?)";
			$query2 = $this->db->query($sql, array($a_id));
			$temp['involves'] = $query2->result_array();
			
			return $query;
		}
	}





	public function submit(){
		$this->form_validation->set_rules('Title','title','required|max_length[50]');
		$this->form_validation->set_rules('Description','description','required|max_length[255]');
		$this->form_validation->set_rules('Type','type','required');

		//echo "1";
		if($this->form_validation->run()){
			//echo "2";
			$sql = "INSERT INTO act (u_id,a_name,extra,t_id,token,money) VALUES (?,?,?,?,?,?)";
			$sql = $this->db->compile_binds($sql,array($this->session->id,$_POST['Title'],$_POST['Description'],$_POST['Type'],$_POST['Token'],$_POST['Money']));
			if($this->db->simple_query($sql)){
				return $this->db->insert_id();
			}
			else{
				return false;
			}
		}
		return false;

	}



	public function is_exist($a_id=1){
		$sql = "SELECT * FROM act_man WHERE a_id=? and u_id=? limit 1";
		$query = $this->db->query($sql, array(intval($a_id),intval($this->session->id)));
		if($query->num_rows()){
			return 1;
		}
		else{
			return 0;
		}
	}


	public function is_check($a_id=1){
		$sql = "SELECT a_check FROM act WHERE a_id=? limit 1";
		$query = $this->db->query($sql, array(intval($a_id)));
		$t = $query->result_array();
		return $t[0]['a_check'];
	}


	public function get_para(){
		$this->form_validation->set_rules('t', 'tid', 'required|integer');
		if($this->form_validation->run()){
			$sql = "SELECT name,tag,view FROM type_para WHERE t_id = ? ORDER BY num";
			$query = $this->db->query($sql,array(intval($_POST['t'])));
			return $query->result_array();
		}
		return 0;
	}


	public function modifya_state($new_state, $a_id){
		$sql = "UPDATE act SET a_state= ? WHERE a_id= ?";
		return $this->db->query($sql, array($new_state, $a_id));
	}



	public function manage($a_id){
		$sql = "SELECT * FROM act_man WHERE a_id=?";
		$query = $this->db->query($sql, array($a_id));
		return $query->result_array();
	}


	public function is_sponsor($a_id=1){
		$sql = "SELECT * FROM act WHERE a_id=? and u_id=?";
		$query = $this->db->query($sql, array($a_id, $this->session->id));
		if($query->num_rows() > 0){
			return true;
		}
		return false;
	}

	
}
