
<form id="form-document" method="post" action="<?php echo base_url().'ajax/promotevideo/saveedit';?>" novalidate="novalidate">
			<input type="hidden" readonly="true" value="<?php echo isset($Videotpl) ? $Videotpl->id : ''?>" name="id" id="id">
			<legend><span>Design your campaign</span></legend>
				<div class="divCls-frame">
					<div class="divCls-Group">
						<object width="520" height="310"><param name="movie" value="http://www.youtube.com/v/<?php echo $Videotpl->videoid;?>"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/<?php echo $Videotpl->videoid;?>" type="application/x-shockwave-flash" width="520" height="310" allowscriptaccess="always" allowfullscreen="true"></embed></object>
						<div class="divCls-event-flash">
	                		<!-- <a class="btn btn-success acls-prev-page" href="#">First Ppge</a>
	                		<a class="btn btn-success acls-next-page" href="#">Next page</a> -->
						</div>
					</div>
				</div>
				<table id="tableIssuu">
					<tbody><tr>
						<td vvalign="top" class="td-lable">Title</td>
						<td><input type="text" value="<?php echo isset($Videotpl) ? $Videotpl->title : ''?>" id="txtTitle" name="txtTitle" class="valid"></td>
					</tr>
					<tr>
						<td valign="top" class="td-lable">Description</td>
						<td>
							<textarea id="textaDescription" name="textaDescription" alt="" title=""><?php echo isset($Videotpl) ? $Videotpl->caption : ''?></textarea>
						</td>
					</tr>
					<tr>
						<td valign="middel" class="td-lable">Link Url</td>
						<td><input type="text" placeholder="URL link to your song, fan page, site" value="<?php echo isset($Videotpl) ? $Videotpl->link_url : ''?>" id="txtlinkurl" name="txtlinkurl"></td>
					</tr>
					<tr>
						<td valign="middel" class="td-lable">Link Title</td>
						<td><input type="text" placeholder="Visit our site, download our song, buy our product" value="<?php echo isset($Videotpl) ? $Videotpl->link_title : ''?>" id="txtLinkTitle" name="txtLinkTitle"></td>
					</tr>
				</tbody></table>
				<legend><span>Targeting</span></legend>
				<div class="divCls-group-form-left">
					<div class="divCls-group">
						<div class="divCls-lable">Ad Placements [?]</div>
						<div class="divCls-element">
							<?php

								$VideoPlacement = isset($Videotpl) ? explode(',', $Videotpl->ad_placements) : array();
								$arrayPlace = array('blogs','games','mobile','social','virtual_currency');
							?>
							<select multiple="true" name="selAdPlacement[]" class="sel-chosen" id="sel-AdPlacement" style="width:360px">
								<?php foreach ($arrayPlace as $key => $value) {
									if ( count($VideoPlacement) AND in_array($value, $VideoPlacement) )
									{
										echo '<option selected="selected" value="'.$value.'">'.$value.'</option>';
									}
									else
									{
										echo '<option value="'.$value.'">'.$value.'</option>';
									}
								}
								?>
							</select>
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Keyword</div>
						<div class="divCls-element">
							<?php
							$healthy = array("'", '\\', '"' ,']', '[', '}', '{', ',');
							$Keywords_librari = isset($Videotpl) ? $Videotpl->caption : ''; 
							$Keywords_librari = str_replace($healthy, '', $Keywords_librari);
							$Keywords_librari = explode(' ', $Keywords_librari);
							$KeySelect = isset($Videotpl) ? json_decode($Videotpl->keywords) : array();

							?>
							<select multiple="true" name="selIdkeyword[]" class="sel-chosen" id="selId-keyword">
								<?php 
									if ( count($Keywords_librari) ){
										foreach ($Keywords_librari as $key => $value) {
											if ( count($KeySelect) AND in_array($value, $KeySelect) )
											{
												echo '<option selected="selected" value="'.$value.'">'.$value.'</option>';
											}
											else
											{
												echo '<option value="'.$value.'">'.$value.'</option>';
											}
										}
									}
								?>
							</select>
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Categorys</div>
						<div class="divCls-element">
							<select role="category-select" name="selCategory[]" multiple="true" id="selCategory" data-placeholder="Choose category..." class="sel-chosen" >
							<?php 
								$arrCate = array();
								if ( isset($Videotpl) )
								{
									foreach ($Videotpl->category->get() as $key => $value) {
										$arrCate[] = $value->id;
									}
								}
								foreach ($Categorystpl as $kcate => $valcate) {
									echo '<option value="'.$valcate->id.'" '.((is_array($arrCate) AND in_array($valcate->id, $arrCate)) ? 'selected="selected"' : '').' >'.$valcate->name.'</option>';
								}
							?>
							</select>
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Countries [?]</div>
						<div class="divCls-element">
							<select role="country-select" name="selCountries[]" multiple="true" id="selCountries" data-placeholder="Choose countries..." class="sel-chosen" >
							<?php 
								$arrcountries = array();
								if ( isset($Videotpl) )
								{
									foreach ($Videotpl->country->get() as $key => $value) {
										$arrcountries[] = $value->id;
									}
								}
								foreach ($Countrietpl as $key => $value) {
									echo '<option value="'.$value->id.'" '.((is_array($arrcountries) AND in_array($value->id, $arrcountries)) ? 'selected="selected"' : '').' >'.$value->name.'</option>';
								}
							?>
							</select>
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Gender [?]</div>
						<div class="divCls-element">
							<input type="radio" class="rdoCls-Gender" <?php echo ($Videotpl->gender=='all' ? 'checked="checked"' : '') ?> id="campaign_gender_a" name="gender" value="all">All
							<input type="radio" class="rdoCls-Gender" <?php echo ($Videotpl->gender=='males' ? 'checked="checked"' : '') ?> id="campaign_gender_m" name="gender" value="males">Males
							<input id="campaign_gender_f" class="rdoCls-Gender" <?php echo ($Videotpl->gender=='females' ? 'checked="checked"' : '') ?> type="radio" name="gender" value="females">Females
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Ages [?]</div>
						<div class="divCls-element">
							<input type="checkbox" class="ckbCls-Age" <?php echo ($Videotpl->ages=='1' ? 'checked="checked"' : '') ?> id="ckb_ages" name="ckb_ages" value="1">
						</div>
					</div>
				</div>
				<?php
					$img= isset($Videotpl) ? explode(':::', $Videotpl->images) : array();
				?>
				<div class="divCls-group-form-right">
					<div id="divId-Content-box">
						<div class="divCls-Content-box-left">
							<h4>Ad Placements</h4>
							<ul class="ulCls-Content-left">
								<li class="active"><a class="aCls-table-left" data-id="0" href="javascript:;">Blogs/Sites</a></li>
								<li><a class="aCls-table-left" data-id="1" href="javascript:;">Games</a></li>
								<li><a class="aCls-table-left" data-id="2" href="javascript:;">Mobile</a></li>
								<li><a class="aCls-table-left" data-id="3" href="javascript:;">Social Networks </a></li>
								<li><a class="aCls-table-left" data-id="4" href="javascript:;">Virtual Currency </a></li>
							</ul>
						</div>
						<div class="divCls-Content-Right">
							<div id="divIdTable-0" class="cls-table active">
								<h4>Blog Preview</h4>
								<div class="divCls-img">
									<div class="divCls-window-img"></div>
									<?php if (!empty($img[0])) : ?>
									<img src="<?php echo $img[0];?>" title="" alt="" />
									<?php endif;?>
								</div>
								<div class="slideshow-img">
									<ul>
										<li class="active"><a class="aclsslide" href="javascript:;" data-id="1" >[1]</a></li>
										<li><a class="aclsslide" href="javascript:;" data-id="2" >[2]</a></li>
										<li><a class="aclsslide" href="javascript:;" data-id="3" >[3]</a></li>
									</ul>
									<div class="slideshow-img-content">
										<div id="dicCls-Slideshow-img-1" class="divCls-Tab active"></div>
										<div id="dicCls-Slideshow-img-2" class="divCls-Tab"></div>
										<div id="dicCls-Slideshow-img-3" class="divCls-Tab"></div>
									</div>
								</div>
							</div>
							
							<div id="divIdTable-1" class="cls-table">
								<h4>Online Game Preview</h4>
								<div >
									<div class="divCls-window-game"></div>
									<?php if (!empty($img[1])) : ?>
									<img src="<?php echo $img[1];?>" title="" alt="" />
									<?php endif;?>
								</div>
							</div>
							<div id="divIdTable-2" class="cls-table">
								<h4>Mobile Preview</h4>
								<div >
									<div class="divCls-window-iphone"></div>
									<?php if (!empty($img[0])) : ?>
									<img src="<?php echo $img[0];?>" title="" alt="" />
									<?php endif;?>
								</div>
							</div>
							<div id="divIdTable-3" class="cls-table">
								<h4>Social Networks Preview</h4>
								<div class="divCls-img">
									<div class="divCls-window-img"></div>
									<?php if (!empty($img[0])) : ?>
									<img src="<?php echo $img[0];?>" title="" alt="" />
									<?php endif;?>
								</div>
								<div class="slideshow-img-facebook">
									<ul>
										<li class="active"><a class="aclsslide-facebook" href="javascript:;" data-id="1" >[1]</a></li>
										<li><a class="aclsslide-facebook" href="javascript:;" data-id="2" >[2]</a></li>
										<li><a class="aclsslide-facebook" href="javascript:;" data-id="3" >[3]</a></li>
									</ul>
									<div class="slideshow-img-content">
										<div id="dicCls-Slideshow-network-img-1" class="divCls-Tab-network active"></div>
										<div id="dicCls-Slideshow-network-img-2" class="divCls-Tab-network"></div>
										<div id="dicCls-Slideshow-network-img-3" class="divCls-Tab-network"></div>
									</div>
								</div>
							</div>
							<div id="divIdTable-4" class="cls-table">
								<h4>Virtual Currency Preview</h4>
								<div >
									<div class="divCls-window-virtual"></div>
									<?php if (!empty($img[0])) : ?>
									<img src="<?php echo $img[0];?>" title="" alt="" />
									<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<legend><span>Design your campaign</span></legend>
				<div class="divCls-group">
					<div class="divCls-lable"> Pricing</div>
					<div class="divCls-element">
						<label>Pay per thousand views</label>
					</div>
				</div>
				<div class="divCls-group">
					<div class="divCls-lable">Budget (USD) [?]</div>
					<div class="divCls-element">
						<span class="input-prepend"><span class="add-on">$</span><input type="text" id="campaign_unformatted_budget" name="unformatted_budget" role="budget-value"  value="<?php echo $Videotpl->budget;?>"></span>
						<select id="campaign_budget_kind" name="budget_kind" role="budget-kind" style="width: 95px;">
							<option value="lifetime" <?php echo $Videotpl->budget_kind=='lifetime' ? 'selected="selected"' : '';?> >Lifetime</option>
							<option value="per_day" <?php echo $Videotpl->budget_kind=='per_day' ? 'selected="selected"' : '';?> >Per day</option>
						</select>
						<div class="budget-hint help-block" role="budget-hint">What is the most you want to spend over the campaign\'s scheduled time period? (min $10.00)</div>
					</div>
				</div>
				<div class="divCls-group">
					<div class="divCls-lable">Max Bid (¢) </div>
					<div class="divCls-element">
						<input type="text" value="<?php echo $Videotpl->max_bid;?>" style="width: 58px;" size="30" role="bid-value" name="unformatted_max_bid" id="campaign_unformatted_max_bid" class="popoverable" data-original-title="" title="">
					
						<div class="budget-hint help-block" role="budget-hint">Maximum you are willing to pay per thousand views in CENTS Suggested Bid : 10¢ - 13¢</div>
					</div>
				</div>
				<div class="divCls-clear"></div>
				<div id="divId-Footer-document">
					<input type="submit" value="Save" class="btn btn-success" name="btt-success" id="btt-success">
				</div>
		</form>