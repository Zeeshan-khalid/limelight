<?php 



class Opport_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function opport_insert($data)
	{
		$this->db->insert('opport',$data);
	}

}





 ?>