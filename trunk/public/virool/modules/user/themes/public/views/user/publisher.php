<div class="container">
	<?php
	$html = '';
		if (isset($Videotpl) AND $Videotpl) {
			foreach ($Videotpl as $key => $value) {
				$img = '';
				$type = 'video'; // kieu hien thi du lieu
				if (!empty($value->type)) {
					switch ($value->type) {
						case 'Video':
							$img = current(explode(':::', $value->images));
							break;
						default:
							$type = 'document';
							$img = 'http://image.issuu.com/'.$value->videoid.'/jpg/page_1_thumb_large.jpg';
							break;
					}
				}
				echo 
					'<div class="divCls-Group"><a href="'.base_url().'Open-Campaigns/'.$type.'/'.$value->videoid.'" title="" alt="">'.
						'<div class="divCls-Img"><img src="'.$img.'" title="" alt="" /></div>'.
						'<div class="divCls-Title">'.$value->title.'</div>'.
						'<div class="divCls-ahref"><button class="btn btn-primary btn-publicsher-add-document" rel="Add" data-id="'.$value->id.'" type="button">Add</button></div>'.
					'</a></div>';
			}
		}
	?>
</div>