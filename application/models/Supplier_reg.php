<?php
class Supplier_reg extends CI_Model 
{
	function supplieradd($data)
	{
          $this->db->insert('supplier',$data);
          return $this->db->insert_id();
	}
	
}