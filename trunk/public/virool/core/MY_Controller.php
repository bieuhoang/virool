<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		// thiết lập output cache: tính bằng phút (minute)
		// $this->output->cache(1);

		// tải thư viện hệ thống
		$this->load->library(array('template', 'upload', 'pagination', 'session', 'assets', 'user_agent', 'form_validation'));
		$this->load->helper(array('date', 'form', 'language', 'url', 'string', 'number', 'html', 'assets', 'response', 'text'));

		// tải sparks
		$this->load->spark('datamapper');
		// lấy dữ liệu người dùng
		$this->user = $this->session->userdata('user_id') ? User_Model::data() : FALSE;
		// ip_address
		$this->ip_address = $this->input->ip_address();

		// get options
		$options = new Option_Model(); $settings = array();
		foreach($options->where('auto_load', 1)->get() as $option)
		{
			$this->config->set_item($option->name, $option->value);
		}

		// cấu hình toàn hệ thống
		$this->template->set('site_config', array(
			'app' => array(
				'site_url' => site_url(),
				'base_url' => base_url(),
				'language' => $this->config->item('language'),
				'charset' => $this->config->item('charset'),
				'url_suffix' => $this->config->item('url_suffix'),
				'index_page' => $this->config->item('index_page'),
				'current_url' => current_url()
			),
			'asset' => array(
				'js_dir' => 'assets/js',
				'css_dir' => 'assets/css',
				'img_dir' => 'assets/img'
			),
			'user' => $this->user?array(
				'username' => $this->user->username,
				'email' => $this->user->email,
				'id' => $this->user->id,
				'first_name' => $this->user->first_name,
				'last_name' => $this->user->last_name,
				'fullname' => $this->user->fullname()
			):false
		));//->enable_parser(FALSE);

		// thêm assets mặc định
		$this->assets->add(array(
			'jquery.min.js',
			'jquery-ui.min.js',
			'core.js',
			'helper.min.js',
			'php.min.js'
		));

		// debug?
		if($this->input->get('debug') == 1)
			$this->output->enable_profiler(TRUE);
	}

	public function title()
	{
		$args = func_get_args();
		call_user_func_array(array($this->template, 'title'), $args);
		return $this;
	}

	public function set($name, $value)
	{
		$this->template->set($name, $value);
		return $this;
	}

	public function breadcrumb($name, $uri)
	{
		$this->template->breadcrumb($name, $uri);
		return $this;
	}

	public function theme($theme = null)
	{
		if(is_null($theme))
		{
			return $this->template->theme();
		}
		$this->template->theme($theme);
		return $this;
	}

	public function layout($layout)
	{
		$this->template->layout($layout);
		return $this;
	}

	public function partial($name, $view, $data = array())
	{
		$this->template->partial($name, $view, $data);
		return $this;
	}

	public function remove_partial($name)
	{
		$this->template->remove_partial($name);
		return $this;
	}

	public function build()
	{
		$this->template->build();
	}

	public function with($name, $value)
	{
		$this->session->set_flashdata($name, $value);
		return $this;
	}

}

// get instance
function ci()
{
	return get_instance();
}