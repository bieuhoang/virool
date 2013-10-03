<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Uservideo_Model extends DataMapper
{
	public $table = 'user_video';

	public $has_one = array(
		'user' => array(
			'class' => 'User_Model',
			'other_field' => 'uservideo',
			'join_self_as' => 'user'
		),
		'publicshe' => array(
			'class' => 'User_Model',
			'other_field' => 'uservideouser',
			'join_self_as' => 'publicshe'
		),
		'video' => array(
			'class' => 'Videos_Model',
			'other_field' => 'uservideo',
			'join_self_as' => 'video'
		)
	);
	public function actions()
	{
		$actions = '';
		
			$actions .=
					($this->action == 'Question' ?
						'<a data-id="'.$this->id.'" class="action-admin tip edit-item" href="javascript:;" title="Question">'.
							'<span class="icon-ok"></span>'.
						'</a>'
						:
						(
							( $this->lock != 'Lock' ) ?
							(
								($this->action == 'Action') ?
									'<a data-id="'.$this->id.'" class="action-admin tip pause-item" href="javascript:;" title="Pause">'.
										'<span class="ico-pause"></span>'.
									'</a>'.
									'<a data-id="'.$this->id.'" class="action-admin tip stop-item" href="javascript:;" title="Stop">'.
										'<span class="ico-stop"></span>'.
									'</a>'
									:
									(
										($this->action == 'Stop') ?
											'<a data-id="'.$this->id.'" class="action-admin tip play-item" href="javascript:;" title="Play">'.
												'<span class="ico-play"></span>'.
											'</a>'.
											'<a data-id="'.$this->id.'" class="action-admin tip pause-item" href="javascript:;" title="Pause">'.
												'<span class="ico-pause"></span>'.
											'</a>'
											:
											(
												($this->action == 'Pause' ) ?
													'<a data-id="'.$this->id.'" class="action-admin tip play-item" href="javascript:;" title="Play">'.
														'<span class="ico-play"></span>'.
													'</a>'.
													'<a data-id="'.$this->id.'" class="action-admin tip stop-item" href="javascript:;" title="Stop">'.
														'<span class="ico-stop"></span>'.
													'</a>'
													:
													''
											)
									)
							)
							:
							'<a data-id="'.$this->id.'" class="action-admin tip delete-item" href="javascript:;" title="Lock">'.
								'<span class="ico-lock"></span>'.
							'</a>'
						)
					).
						'<a data-id="'.$this->id.'" class="action-admin tip delete-item" href="javascript:;" title="Delete">'.
							'<span class="ico-trash"></span>'.
						'</a>';
		

		return $actions;
	}
	/**
	*
	*	@param : id advertiser, lock
	*	Phương thức update lock 
	*	@return : void
	*
	**/
	public function updateLock($userid, $lock = '') {
		if ( !empty($userid) )
		{
			$this->where(array('user_id'=>$userid))->get();
			if ( $this->result_count() )
			{
				foreach ($this as $key => $value) {
					$value->lock = $lock;
					$value->save();
				}
			}
		}
	}

	/**
	*
	*	@param : id
	*	Phương thức lấy video thuộc publisher
	*	@return : array
	*
	**/
	public function getVideoPublisher($userid) {
		$this->where(array('publicshe_id'=>$userid))->get();
		$output = array();
		if ( $this->result_count() )
		{
			foreach ($this as $key => $value) {
				$output[] = $value->video_id;
			}
		}
		return $output;
	}
}