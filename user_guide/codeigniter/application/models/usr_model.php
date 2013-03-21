<?php
class Usr_model extends CI_Model{
	function __construct()
	{
	
		parent::__construct();
		$this->load->database();
	}

	function usr_login()
	{
		$sql = "SELECT * FROM tbl_login  WHERE lgin_name = ? AND lgin_pass = ? ";
		$name=$this->input->post('name');
		$password=$this->input->post('password');
		$query=$this->db->query($sql, array($name,$password));
		//foreach($query->result() as $cat){
		//	$=$cat;
		//}	
		//$this->db->where('lgin_name',$this->input->post('name'));
		
		//$this->db->where('lgin_pass',$this->input->post('password'));
		//$query=$this->db->get('tbl_login');
		if($query->num_rows()==1){
			return $query->first_row('array');
		}
		else{
			return 0;
		}
	}	
}
?>
