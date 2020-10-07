<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	}
	public function suppliers()
	{
		$this->load->view('head_part');
		$this->load->view('nav_part');
		$this->load->view('header_banner_part');
		$this->load->view('suppliers_page');
		$this->load->view('footer_part');
		$this->load->view('below_footer');
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
}
