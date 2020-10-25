<?php
class Partner_reg extends CI_Model 
{
	function partneradd($data)
	{
          $this->db->insert('partner',$data);
          return $this->db->insert_id();
	}
	
}