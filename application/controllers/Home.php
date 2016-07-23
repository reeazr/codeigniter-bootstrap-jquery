<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $data;
	
	public function __construct()
	{
		parent::__construct();
		$this->data['controller'] = $this->uri->segment(1,"home");
		$this->data['method'] = $this->uri->segment(2,"index");
		$this->data['pageTitle'] = "CodeIgniter Bootstrap";
	}
	
	public function index()
	{
		$this->data['pages']=array(
			array('title'=>'Blog', 'url'=>'blog','img'=>'blog.jpg'),
			array('title'=>'Carousel', 'url'=>'carousel','img'=>'carousel.jpg'),
			array('title'=>'Cover', 'url'=>'cover','img'=>'cover.jpg'),
			array('title'=>'Dashboard', 'url'=>'dashboard','img'=>'dashboard.jpg'),
			array('title'=>'Grid', 'url'=>'grid','img'=>'grid.jpg'),
			array('title'=>'Jumbotron', 'url'=>'jumbotron','img'=>'jumbotron.jpg'),
			/*array('title'=>'Jumbotron Narrow', 'url'=>'jumbotron_narrow','img'=>'jumbotron-narrow.jpg'),
			array('title'=>'Justified Nav', 'url'=>'justified_nav','img'=>'justified-nav.jpg'),*/
			array('title'=>'Navbar', 'url'=>'navbar','img'=>'navbar.jpg'),
			/*array('title'=>'navbar-fixed', 'url'=>'navbar_fixed','img'=>'navbar-fixed.jpg'),
			array('title'=>'navbar-static', 'url'=>'navbar_static','img'=>'navbar-static.jpg'),
			array('title'=>'non-responsive', 'url'=>'non_responsive','img'=>'non-responsive.jpg'),
			array('title'=>'offcanvas', 'url'=>'offcanvas','img'=>'offcanvas.jpg'),*/
			array('title'=>'Sign-In', 'url'=>'signin','img'=>'sign-in.jpg'),
			array('title'=>'Starter-Template', 'url'=>'starter_template','img'=>'starter-template.jpg'),
			array('title'=>'Sticky-Footer', 'url'=>'sticky_footer','img'=>'sticky-footer.jpg'),
			array('title'=>'Sticky-Footer-Navbar', 'url'=>'sticky_footer_navbar','img'=>'sticky-footer-navbar.jpg'),
			array('title'=>'Theme', 'url'=>'theme','img'=>'theme.jpg')
		);
		$this->load->view('common/header',$this->data);
		$this->load->view('summary',$this->data);
		$this->load->view('common/closure',$this->data);
	}
	
	public function blog()
	{
		$this->data['pageTitle'] = "Blog";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/blog',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function carousel()
	{
		$this->data['pageTitle'] = "Carousel";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/carousel',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function cover()
	{
		$this->data['pageTitle'] = "Cover";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/cover',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function dashboard()
	{
		$this->data['pageTitle'] = "Dashboard";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/dashboard',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function grid()
	{
		$this->data['pageTitle'] = "Grid";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/grid',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function jumbotron()
	{
		$this->data['pageTitle'] = "Jumbotron";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/jumbotron',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function jumbotron_narrow()
	{
		$this->data['pageTitle'] = "Jumbotron Narrow";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/jumbotron_narrow',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function justified_nav()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/justified_nav',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function navbar()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/navbar',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function navbar_fixed_top()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/navbar_fixed_top',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function navbar_static_top()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/navbar_static_top',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function signin()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('samples/signin',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function starter_template()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/starter_template',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function sticky_footer()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/sticky_footer',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function sticky_footer_fixed_navbar()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/sticky_footer_fixed_navbar',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
	
	public function tooltip_viewport()
	{
		$this->data['pageTitle'] = "Carousel Template for Bootstrap";
		$this->load->view('common/header',$this->data);
		$this->load->view('common/nav',$this->data);
		$this->load->view('samples/tooltip_viewport',$this->data);
		$this->load->view('common/footer',$this->data);
		$this->load->view('common/closure',$this->data);
	}	
}
