<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Campaignspublisher extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ( !$this->user OR $this->user->group_id != 2 ) {
			redirect(base_url());
			exit;
		}		
		$this->assets->add('bootstrap/bootstrap.min.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('campaignspublisher.css', 'campaignspublisher');
		$this->assets->add('campaignspublisher.js', 'campaignspublisher');
		$this->set('DocumentRunTpl', $this->run())
			->set('DocumentPendingTpl', $this->pending());
		$this->build();
	}
	public function run(){
		$Uservideo = new Uservideo_Model();
		$Uservideo =$Uservideo->where('publicshe_id', $this->user->id)
					->where('action', 'Action')
					->where('type', 'Publisher')
					->where('tokenapi != ""')
					->where('sate', 'Run')
					->include_related('video', array('title', 'images', 'type', 'videoid'))
					->get();
		$items = array();
		if ( $Uservideo->result_count() )
		{
			foreach ($Uservideo as $key => $value) {

				$img = '';
				if ( $value->video_type === 'Video' )
				{
					$img = explode(':::', $value->video_images);
					$img = '<img src="'.$img[0].'" class="imgCls-info" title="" alt="" />';
				}
				else
				{
					$img = '<img src="http://image.issuu.com/'.$value->video_videoid.'/jpg/page_1_thumb_large.jpg" class="imgCls-info" title="" alt="" />';
				}
				$items[] = array(
					'id' => $value->id,
					'images' => $img,
					'title' => $value->video_title,
					'tokenapi' => $value->tokenapi,
					'views' => $value->views,
					'click' => $value->click
				);
			}
			return $items;
		}
		return false;
	}
	
	public function pending(){
		$Uservideo = new Uservideo_Model();
		$Uservideo =$Uservideo->where('publicshe_id', $this->user->id)
					->where('type', 'Publisher')
					/*->where('tokenapi = ""')*/
					->where('sate', 'Pending')
					->where_in('action', array('Question', 'Pause', 'Stop'))
					->include_related('video', array('title', 'images', 'type', 'videoid'))
					->get();
		$items = array();
		if ( $Uservideo->result_count() )
		{
			foreach ($Uservideo as $key => $value) {

				$img = '';
				if ( $value->video_type === 'Video' )
				{
					$img = explode(':::', $value->video_images);
					$img = '<img src="'.$img[0].'" class="imgCls-info" title="" alt="" />';
				}
				else
				{
					$img = '<img src="http://image.issuu.com/'.$value->video_videoid.'/jpg/page_1_thumb_large.jpg" class="imgCls-info" title="" alt="" />';
				}
				$items[] = array(
					'id' => $value->id,
					'images' => $img,
					'title' => $value->video_title,
					'action' => $value->action,
					'views' => $value->views,
					'click' => $value->click
				);
			}
			return $items;
		}
		return false;
	}
}