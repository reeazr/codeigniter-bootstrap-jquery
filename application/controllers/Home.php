<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->data['controller'] = $this->uri->segment(1,"home");
		$this->data['method'] = $this->uri->segment(2,"index");
	}
	
	public function index()
	{
		$this->data['pages']=array(
			array('title'=>'Blog', 'url'=>'blog','img'=>'blog.jpg'),
			array('title'=>'Carousel', 'url'=>'carousel','img'=>'carousel.jpg'),
			array('title'=>'Cover', 'url'=>'cover','img'=>'cover.jpg'),
			array('title'=>'Dashboard', 'url'=>'dashboard','img'=>'dashboard.jpg'),
			array('title'=>'Grid', 'url'=>'grid','img'=>'grid.jpg'),
			array('title'=>'Equal Height Columns', 'url'=>'equal_height_columns','img'=>'equal-height-columns.jpg'),
			array('title'=>'Jumbotron', 'url'=>'jumbotron','img'=>'jumbotron.jpg'),
			array('title'=>'Jumbotron Narrow', 'url'=>'jumbotron_narrow','img'=>'jumbotron-narrow.jpg'),
			array('title'=>'Justified Nav', 'url'=>'justified_nav','img'=>'justified-nav.jpg'),
			array('title'=>'navbar', 'url'=>'navbar','img'=>'navbar.jpg'),
			array('title'=>'navbar-fixed', 'url'=>'navbar_fixed','img'=>'navbar-fixed.jpg'),
			array('title'=>'navbar-static', 'url'=>'navbar_static','img'=>'navbar-static.jpg'),
			array('title'=>'non-responsive', 'url'=>'non_responsive','img'=>'non-responsive.jpg'),
			array('title'=>'offcanvas', 'url'=>'offcanvas','img'=>'offcanvas.jpg'),
			array('title'=>'sign-in', 'url'=>'sign_in','img'=>'sign-in.jpg'),
			array('title'=>'starter-template', 'url'=>'starter_template','img'=>'starter-template.jpg'),
			array('title'=>'sticky-footer', 'url'=>'sticky_footer','img'=>'sticky-footer.jpg'),
			array('title'=>'sticky-footer-navbar', 'url'=>'sticky_footer_navbar','img'=>'sticky-footer-navbar.jpg'),
			array('title'=>'theme', 'url'=>'theme','img'=>'theme.jpg')
		);
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('summary',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}
	
	public function blog()
	{
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/blog',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function carousel()
	{
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/carousel',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function cover()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function dashboard()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function grid()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function jumbotron()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function jumbotron_narrow()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function justified_nav()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function navbar()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function navbar_fixed_top()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function navbar_static_top()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function signin()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function starter_template()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function sticky_footer()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function sticky_footer_fixed_navbar()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
	
	public function tooltip_viewport()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('sample_content');
		$this->load->view('common/footer');
		$this->load->view('common/closure');
	}	
}
