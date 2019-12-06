<?php 



class Insert_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function form_insert($data)
	{
		$this->db->insert('admin',$data);
	}
}





 ?>