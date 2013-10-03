<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Mysites extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$Mysite = new Mysite_Model();
		$Platform = new Platforms_Model();
		$info = $Mysite->where('user_id', $this->user->id)->get();
		if (!empty($info->platforms) ) {
			$Platform->where_in('id', json_decode($info->platforms))->get();
			$this->set('Platform_info', $Platform);
		}
		$this->assets->add('bootstrap/bootstrap.min.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('mysites.css', '_theme_');
		$this->assets->add('mysites.js', '_theme_');
		$this->set('Mysite_info', $info);
		$this->build();
	}
	public function edit(){
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		
		$this->assets->add('edit.mysites.css', '_theme_');
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('jsmysite.js', 'mysites');
		$idVideo = ($this->uri->segment(3) ? $this->uri->segment(3) : 0 ) ;
		$Platform = new Platforms_Model();
		$Countrie = new Country_Model();
		$Categorys = new Categorys_Model();
		$Mysite = new Mysite_Model();
		$Mysite->where('user_id', $this->user->id);
		if ($post = $this->input->post()) {
			// echo '<pre>';print_r($_FILES);exit;
			$Mysite->where('id', $post['sites_id'])->get();
			if ($Mysite->result_count()) {
				$Mysite->title = $post['site_name'];
				$Mysite->url = $post['site_url'];
				$Mysite->description = $post['site_description'];
				$Mysite->platforms = (!empty($post['site_platform_list']) ? json_encode($post['site_platform_list']) : '');
				$Mysite->countries = (!empty($post['site_countries']) ? json_encode($post['site_countries']) : '');
				$Mysite->categorys_id = (!empty($post['site_categorys']) ? json_encode($post['site_categorys']) : '');
				$Mysite->keywords = $post['site_keywords'];
				$Mysite->currency = $post['site_currency_name'];
				$Mysite->currency_conversion_rate = $post['site_currency_conversion_rate'];
				$Mysite->callback_url = $post['site_callback_url'];
				$Mysite->signature_template = $post['site_signature_template'];
				$Mysite->encryption_method = $post['site_digest_method'];
				$Mysite->save();
			} else {
				redirect(base_url().'My-Sites');
			}
		}
		$Mysite->where('id', $idVideo)->get();
		if (!$Mysite->result_count()) {
			redirect(base_url().'My-Sites');
		}
		$this->set('Platforms_tpl', $Platform->get());
		$this->set('Mysite_tpl', $Mysite);
		$this->set('Countries_tpl', $Countrie->get());
		$this->set('Categorys_tpl', $Categorys->get());
		$this->build();
	}
	public function add(){
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$this->assets->add('edit.mysites.css', '_theme_');
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('jsmysite.add.js', 'mysites');
		$Mysite = new Mysite_Model();
		$Categorys = new Categorys_Model();
		$Platform = new Platforms_Model();
		$Countrie = new Country_Model();
		if ($post = $this->input->post()) {
			$Mysite->title = $post['site_name'];
			$Mysite->url = $post['site_url'];
			$Mysite->description = $post['site_description'];
			$Mysite->platforms = (!empty($post['site_platform_list']) ? json_encode($post['site_platform_list']) : '');
			$Mysite->countries = (!empty($post['site_countries']) ? json_encode($post['site_countries']) : '');
			$Mysite->categorys_id = (!empty($post['site_categorys']) ? json_encode($post['site_categorys']) : '');
			$Mysite->keywords = $post['site_keywords'];
			$Mysite->currency = $post['site_currency_name'];
			$Mysite->currency_conversion_rate = $post['site_currency_conversion_rate'];
			$Mysite->callback_url = $post['site_callback_url'];
			$Mysite->signature_template = $post['site_signature_template'];
			$Mysite->encryption_method = $post['site_digest_method'];
			$Mysite->user_id = $this->user->id;
			$Mysite->created_at = strtotime(date("Y-m-d H:i:s"));
			$Mysite->save();
			redirect(base_url().'My-Sites');
		}
		$this->set('Platforms_tpl', $Platform->get());
		$this->set('Countries_tpl', $Countrie->get());
		$this->set('Categorys_tpl', $Categorys->get());
		$this->set('Token_id', $this->user->id);
		$this->build();
	}
	public function upload(){
		$this->load->spark('imgthumb');
		$post = $this->input->post();
		if (!empty($_FILES['Filedata']['name']) AND $img = $this->imgthumb->UploadFile_Resize('Filedata', 'uploads/sites')) {
			if ($img ==1) {
				$Img = new Siteimg_Model();
				$Img->site_id = $post['idAlbums'];
				$Param = $this->imgthumb->getFile(true);
				$Img->url = $Param[0];
				$Img->urlfull = $Param[1];
				$Img->created_at = strtotime(date('d-m-Y H:i:s'));
				$Img->save();
				$imgpath = base_url().$Param[0];
				exit(json_encode(array('resp'=>true, 'id'=>$Img->id, 'img'=> $imgpath)));
			}
		}
		exit(json_encode(array('resp'=>false)));
	}
	public function ajaxadd(){
		$this->load->spark('imgthumb');
		$Mysite = new Mysite_Model();
		if ($post = $this->input->post()) {
			$Mysite->title = isset($post['site_name']) ? $post['site_name'] : '';
			$Mysite->url = isset($post['site_url']) ? $post['site_url'] : '';
			$Mysite->description = isset($post['site_description']) ? $post['site_description'] : '';
			$Mysite->platforms = (!empty($post['site_platform_list']) ? json_encode($post['site_platform_list']) : '');
			$Mysite->countries = (!empty($post['site_countries']) ? json_encode($post['site_countries']) : '');
			$Mysite->categorys_id = (!empty($post['site_categorys']) ? json_encode($post['site_categorys']) : '');
			$Mysite->keywords = isset($post['site_keywords']) ? $post['site_keywords'] : '';
			$Mysite->currency = isset($post['site_currency_name']) ? $post['site_currency_name'] : '';
			$Mysite->currency_conversion_rate = isset($post['site_currency_conversion_rate']) ? $post['site_currency_conversion_rate'] : '';
			$Mysite->callback_url = isset($post['site_callback_url']) ? $post['site_callback_url'] : '';
			$Mysite->signature_template = isset($post['site_signature_template']) ? $post['site_signature_template'] : '';
			$Mysite->encryption_method = isset($post['site_digest_method']) ? $post['site_digest_method'] : '';
			$Mysite->user_id = isset($post['token_id']) ? $post['token_id'] : 0;
			$Mysite->created_at = strtotime(date("Y-m-d H:i:s"));
			$Mysite->save();
			if (!empty($_FILES['Filedata']['name']) AND $img = $this->imgthumb->UploadFile_Resize('Filedata', 'uploads/sites')) {
				if ($img ==1) {
					$Img = new Siteimg_Model();
					$Img->site_id = $Mysite->id;
					$Param = $this->imgthumb->getFile(true);
					$Img->url = $Param[0];
					$Img->urlfull = $Param[1];
					$Img->created_at = strtotime(date('d-m-Y H:i:s'));
					$Img->save();
					$imgpath = base_url().$Param[0];
				}
			}
			exit(json_encode(array('resp'=>true, 'id'=>$Img->id, 'img'=> $imgpath)));
		}
		exit(json_encode(array('resp'=>false)));
	}
}