<?php
class Customer_reg extends CI_Model 
{
	function customeradd($data)
	{
          $this->db->insert('customer',$data);
          return $this->db->insert_id();
	}
	
}