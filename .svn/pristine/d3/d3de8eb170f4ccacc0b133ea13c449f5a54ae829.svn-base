<?php

class Admin_Controller extends MY_Controller
{
	protected $admin_buttons = array('add', 'edit', 'delete', 'change-order', 'active', 'deactive', 'trash');

	function __construct()
	{
		parent::__construct();
		
		// load helper
		$this->load->helper('admin', 'text');

		// language
		$this->lang->load('permission');

		// thiết lập theme cho template
		$this->theme('cpanel');

		$this->partial('navigation', 'partials/navigation');

		// thiết lập và thêm asset cho template
		$this->assets->initialize(array('theme' => $this->template->theme()));		
		$this->assets->group('admin', array('general', 'ie6', 'ie7'));

		$this->assets->add('admin/plugins/charts/excanvas.min.js', '_theme_');
		$this->assets->add('admin/plugins/charts/jquery.flot.js','_theme_');
		$this->assets->add('admin/plugins/charts/jquery.flot.resize.js','_theme_');
		$this->assets->add('admin/plugins/charts/jquery.sparkline.min.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.easytabs.min.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.collapsible.min.js','_theme_');
		$this->assets->add('admin/plugins/ui/prettify.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.colorpicker.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.timepicker.min.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.fancybox.js','_theme_');
		$this->assets->add('admin/plugins/ui/jquery.fullcalendar.min.js','_theme_');

		$this->assets->add('admin/plugins/forms/jquery.uniform.min.js','_theme_');
		$this->assets->add('admin/plugins/forms/jquery.tagsinput.min.js','_theme_');

		$this->assets->add('admin/plugins/tables/jquery.dataTables.min.js','_theme_');

		$this->assets->add('admin/files/bootstrap.min.js','_theme_');
		
		$this->assets->add('admin/functions/index.js','_theme_');
		$this->assets->add('general.css','_theme_');
		/*$this->assets->add('styles/default/ui.css','_theme_');
		$this->assets->add('reset.css','_theme_');*/
		$this->assets->add('led_icons.css','_theme_');
		$this->assets->add('bootstrap/bootstraps.css','_theme_');
		$this->assets->add('admin/bootstrap.css','_theme_');
		// These pages get past permission checks
		$ignored_pages = array(
			'admin/index', 
			'admin/login', 
			'admin/logout', 
			'admin/forgot_password', 
			'login/index', 
			'logout/index', 
			'forgot_password/index'
		);

		// Check if the current page is to be ignored
		$current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, 'index');
		// Dont need to log in, this is an open page
		if (in_array($current_page, $ignored_pages))
		{			
			return TRUE;
		} else if ($this->user and !$this->user->is_admin()) {
			redirect('admin/login', 'refresh');
		}
		elseif($this->user == FALSE )
		{
			redirect('admin/login', 'refresh');
		}
	}

	public function actions()
	{
		$buttons = func_get_args();
		$html = '<div class="button-actions">';

		foreach($buttons as $button)
		{
			if(in_array($button, $this->admin_buttons) and $this->user and $this->user->can($button))
			{				
				switch($button)
				{
					case 'add':
						$html .= '<a href="#" class="action-add"><span class="led-icon led-icon-add nmr"></span> Add new</a>';
						break;
					case 'delete':
						$html .= '<a href="#" class="action-delete"><span class="led-icon led-icon-cross nmr"></span> Delete</a>';
						break;
					case 'edit':
						$html .= '<a href="#" class="action-edit"><span class="led-icon led-icon-pencil nmr"></span> Edit</a>';
						break;
					case 'change-order':
					$html .= '<a href="#" class="action-edit"><span class="led-icon led-icon-cross nmr"></span> Change order</a>';
						break;
				}
			}
		}

		$html .= '</div>';

		return $html;
	}
}