<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $user = User::like('username', 'admin')->where("active = 1 AND first_name = 'Admin'")->all();
		$this->template->theme('test');
		$this->load->library('assets');
		$this->assets->add('styles.css', '_theme_');
		$this->assets->add('https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
		$this->assets->add('core.js');
		$this->template->title('Welcome to CodeIgniter')->set('name', 'Mike Nguyen')->build();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */