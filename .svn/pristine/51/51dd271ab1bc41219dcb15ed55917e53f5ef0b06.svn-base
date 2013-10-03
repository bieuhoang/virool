
<form id="form-document" method="post" action="<?php echo base_url().'ajax/promotedocument/saveedit';?>" novalidate="novalidate">
			<input type="hidden" readonly="true" value="<?php echo isset($Videotpl) ? $Videotpl->id : ''?>" name="id" id="id">
			<legend><span>Design your campaign</span></legend>
				<div class="divCls-frame">
					<div class="divCls-Group">
						<object width="590" height="350" type="application/x-shockwave-flash" id="issuuViewer-Event" data="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf"><param name="allowfullscreen" value="true"><param name="allowScriptAccess" value="always"><param name="menu" value="false"><param name="wmode" value="transparent"><param name="flashvars" value="jsAPIClientDomain=http://mydarling.vn/virool/&amp;mode=mini&amp;documentId=<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>"></object>
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
				<div class="divCls-group-form-right">
					<div id="divId-Content-box">
						<div class="divCls-Content-box-left">
							<h4>Ad Placements</h4>
							<ul class="ulCls-Content-left">
								<li class="active"><a href="javascript:;" data-id="0" class="aCls-table-left">Blogs/Sites</a></li>
								<li><a href="javascript:;" data-id="1" class="aCls-table-left">Games</a></li>
								<li><a href="javascript:;" data-id="2" class="aCls-table-left">Mobile</a></li>
								<li><a href="javascript:;" data-id="3" class="aCls-table-left">Social Networks </a></li>
								<li><a href="javascript:;" data-id="4" class="aCls-table-left">Virtual Currency </a></li>
							</ul>
						</div>
						<div class="divCls-Content-Right">
							<div class="cls-table active" id="divIdTable-0">
								<h4>Blog Preview</h4>
								<div class="divCls-img">
									<img alt="" title="" src="http://image.issuu.com/<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>/jpg/page_1_thumb_large.jpg" class="img-tab0">
								</div>
								<div class="slideshow-img">
									<ul>
										<li class="active"><a data-id="1" href="javascript:;" class="aclsslide">[1]</a></li>
										<li><a data-id="2" href="javascript:;" class="aclsslide">[2]</a></li>
										<li><a data-id="3" href="javascript:;" class="aclsslide">[3]</a></li>
									</ul>
									<div class="slideshow-img-content">
										<div class="divCls-Tab active" id="dicCls-Slideshow-img-1"></div>
										<div class="divCls-Tab" id="dicCls-Slideshow-img-2"></div>
										<div class="divCls-Tab" id="dicCls-Slideshow-img-3"></div>
									</div>
								</div>
							</div>
							<div class="cls-table" id="divIdTable-1">
								<h4>Online Game Preview</h4>
								<div>
									<div class="divCls-window-game"></div>
									<img alt="" title="" src="http://image.issuu.com/<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>/jpg/page_1_thumb_large.jpg" class="img-tab1">
								</div>
							</div>
							<div class="cls-table" id="divIdTable-2">
								<h4>Mobile Preview</h4>
								<div>
									<div class="divCls-window-iphone"></div>
									<img alt="" title="" src="http://image.issuu.com/<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>/jpg/page_1_thumb_large.jpg" class="img-tab2">
								</div>
							</div>
							<div class="cls-table" id="divIdTable-3">
								<h4>Social Networks Preview</h4>
								<div class="divCls-img">
									<img alt="" title="" src="http://image.issuu.com/<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>/jpg/page_1_thumb_large.jpg" class="img-tab3">
								</div>
								<div class="slideshow-img-facebook">
									<ul>
										<li class="active"><a data-id="1" href="javascript:;" class="aclsslide-facebook">[1]</a></li>
										<li><a data-id="2" href="javascript:;" class="aclsslide-facebook">[2]</a></li>
										<li><a data-id="3" href="javascript:;" class="aclsslide-facebook">[3]</a></li>
									</ul>
									<div class="slideshow-img-content">
										<div class="divCls-Tab-network active" id="dicCls-Slideshow-network-img-1"></div>
										<div class="divCls-Tab-network" id="dicCls-Slideshow-network-img-2"></div>
										<div class="divCls-Tab-network" id="dicCls-Slideshow-network-img-3"></div>
									</div>
								</div>
							</div>
							<div class="cls-table" id="divIdTable-4">
								<h4>Virtual Currency Preview</h4>
								<div>
									<div class="divCls-window-virtual"></div>
									<img alt="" title="" src="http://image.issuu.com/<?php echo isset($Videotpl) ? $Videotpl->videoid : ''?>/jpg/page_1_thumb_large.jpg" class="img-tab4">
								</div>
							</div>
						</div>
					</div>
				</div>
				<legend><span>Set Budget &amp; Pricing</span></legend>
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