<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		// $this->load->view('home');
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('homepage');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function customer()
	{
		$this->load->view('customer_head');
		$this->load->view('customer_nav');
		$this->load->view('customer_after_nav');
		$this->load->view('customer_products');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function customer_address()
	{
		$this->load->view('customer_head');
		$this->load->view('customer_nav');
		$this->load->view('customer_addresses');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function product()
	{
		$this->load->view('customer_head');
		$this->load->view('product_nav');
		$this->load->view('product');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function cart()
	{
		$this->load->view('customer_head');
		$this->load->view('cart_nav');
		$this->load->view('cart');
		$this->load->view('popular_categories');
		$this->load->view('customer_footer');
		$this->load->view('customer_login_modal');
		$this->load->view('customer_bottom');
	}
	public function about_us()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('about_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function partners()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('partners_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
		$this->load->model('Partner_reg');
	}
	public function suppliers()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('suppliers_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
		$this->load->model('Supplier_reg');
	}
	public function customer_reg()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('customer_reg');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
		$this->load->model('Supplier_reg');
	}
	public function contact()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('contact_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function login()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('login_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function career()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('career_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function terms_and_conditions()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('toc');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function privacy_policies()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('policies');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq_partner()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_partner_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function faq_supplier()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('faq_supplier_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}
	public function test_tbl()
	{
		$this->load->database();
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('test_dbtbl');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
	}

	public function partnerreg()
	{
		$pass = random_string('alnum', 12);
		$stat = 2;
		$this->load->model('Partner_reg');
		if ($this->input->post('addpartner')) {
			$data['partner_fnm'] = $this->input->post('partner_fnm');
			$data['partner_mnm'] = $this->input->post('partner_mnm');
			$data['partner_lnm'] = $this->input->post('partner_lnm');
			$data['partner_tel'] = $this->input->post('partner_tel');
			$data['partner_mail'] = $this->input->post('partner_mail');
			$data['partner_ct'] = $this->input->post('partner_ct');
			$data['partner_occu'] = $this->input->post('partner_occu');
			$data['partner_ref'] = $this->input->post('partner_ref');
			$data['partner_stat'] = $stat;
			$data['partner_pass'] = $pass;
			$user = $this->Partner_reg->partneradd($data);
			if ($user > 0) {
				echo "Record Saved Successfully";
			} else {
				echo "Insert error !";
			}
		}
	}

	public function supplierreg()
	{
		$pass = random_string('alnum', 12);
		$stat = 2;
		$this->load->model('Supplier_reg');
		if ($this->input->post('addsupplier')) {
			$data['supplier_fnm'] = $this->input->post('supplier_fnm');
			$data['supplier_mnm'] = $this->input->post('supplier_mnm');
			$data['supplier_lnm'] = $this->input->post('supplier_lnm');
			$data['supplier_bnm'] = $this->input->post('supplier_bnm');
			$data['supplier_tel'] = $this->input->post('supplier_tel');
			$data['supplier_mail'] = $this->input->post('supplier_mail');
			$data['supplier_ct'] = $this->input->post('supplier_ct');
			$data['supplier_prod_qty'] = $this->input->post('supplier_prod_qty');
			$data['supplier_type'] = $this->input->post('supplier_type');
			$data['supplier_ref'] = $this->input->post('supplier_ref');
			$data['supplier_prod_category'] = $this->input->post('supplier_prod_category');
			$data['supplier_range'] = $this->input->post('supplier_range');
			$data['supplier_stat'] = $stat;
			$data['supplier_pass'] = $pass;
			$user = $this->Supplier_reg->supplieradd($data);
			if ($user > 0) {
				echo "Record Saved Successfully";
			} else {
				echo "Insert error !";
			}
		}
	}

	public function customerreg()
	{
		$this->load->model('Customer_reg');
		if ($this->input->post('addcustomer')) {
			$data['customer_fnm'] = $this->input->post('customer_fnm');
			$data['customer_mnm'] = $this->input->post('customer_mnm');
			$data['customer_lnm'] = $this->input->post('customer_lnm');
			$data['customer_tel'] = $this->input->post('customer_tel');
			$data['customer_mail'] = $this->input->post('customer_mail');
			$data['customer_ct'] = $this->input->post('customer_ct');
			$data['customer_state'] = $this->input->post('customer_state');
			$data['customer_ref'] = $this->input->post('customer_ref');
			$data['customer_address'] = $this->input->post('customer_address');
			$user = $this->Customer_reg->customeradd($data);
			if ($user > 0) {
				echo "Record Saved Successfully";
			} else {
				echo "Insert error !";
			}
		}
	}
}
