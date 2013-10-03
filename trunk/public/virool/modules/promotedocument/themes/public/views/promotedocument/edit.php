<?php if (!empty($Documenttpl)) : ?>
	<div class="container divCls-minheight">
		<form action="<?php echo base_url();?>Promote-Document" method="post" id="form-document">
			<input type="hidden" id="id" name="id" value="<?php echo $Documenttpl->id;?>" readonly="true" />
			<input type="hidden" id="ipDocsId" name="ipDocsId" value="<?php echo $Documenttpl->videoid;?>" readonly="true" />
			<legend><span>Design your campaign</span></legend>
				<div class="divCls-frame">
					<div class="divCls-Group">
						<div id="divId-flash"></div>
						<div class="divCls-event-flash">
	                		<a href="#" class="btn btn-success acls-prev-page" >First Ppge</a>
	                		<a href="#" class="btn btn-success acls-next-page" >Next page</a>
						</div>
					</div>
				</div>
				<input type="hidden" id="ipDocsId" name="ipDocsId" value="<?php echo $Documenttpl->documentId;?>" readonly="true" />
				<table id="tableIssuu">
					<tr>
						<td class="td-lable" vvalign="top">Title</td>
						<td><input type="text" name="txtTitle" id="txtTitle" value="<?php echo $Documenttpl->title;?>" /></td>
					</tr>
					<tr>
						<td class="td-lable" valign="top" >Description</td>
						<td><textarea title="" alt="" name="textaDescription" id="textaDescription" ><?php echo $Documenttpl->caption;?></textarea></td>
					</tr>
					<tr>
						<td class="td-lable" valign="middel">Link Url</td>
						<td><input type="text" name="txtlinkurl" id="txtlinkurl" value="<?php echo $Documenttpl->link_url;?>"  placeholder="URL link to your song, fan page, site" /></td>
					</tr>
					<tr>
						<td class="td-lable" valign="middel">Link Title</td>
						<td><input type="text" name="txtLinkTitle" id="txtLinkTitle" value="<?php echo $Documenttpl->link_title;?>" placeholder="Visit our site, download our song, buy our product" /></td>
					</tr>
				</table>
				<legend><span>Targeting</span></legend>
				<div class="divCls-group-form-left">
					<div class="divCls-group">
						<div class="divCls-lable">Ad Placements [?]</div>
						<div class="divCls-element">
							<input type="radio" class="rdoCls-Placements" checked="checked" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" name="platform_list" role="platforms-all-radio" value="blogs,games,mobile,social,virtual_currency">All
							<input type="radio" class="rdoCls-Placements" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" name="platform_list" role="platforms-specific-radio" value="blogs,games,mobile,social,virtual_currency">Let me choose...
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Keyword</div>
						<div class="divCls-element">
							<select id="selId-keyword" class="sel-chosen" name="selIdkeyword[]" multiple="true" >
							<?php
								if (!empty($Documenttpl->keywords)){
									$Keywords = json_decode($Documenttpl->keywords);
									foreach ($Keywords as $k_key => $val_key) {
										echo '<option value="'.$val_key.'" selected="selected" >'.$val_key.'</option>';
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
								foreach ($Documenttpl->category->get() as $key => $value) {
									$arrCate[] = $value->id;
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
								foreach ($Documenttpl->country->get() as $key => $value) {
									$arrcountries[] = $value->id;
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
							<input type="radio" class="rdoCls-Gender" <?php echo ($Documenttpl->gender=='all' ? 'checked="checked"' : '') ?> id="campaign_gender_a" name="gender" value="all">All
							<input type="radio" class="rdoCls-Gender" <?php echo ($Documenttpl->gender=='males' ? 'checked="checked"' : '') ?> id="campaign_gender_m" name="gender" value="males">Males
							<input id="campaign_gender_f" class="rdoCls-Gender" <?php echo ($Documenttpl->gender=='females' ? 'checked="checked"' : '') ?> type="radio" name="gender" value="females">Females
						</div>
					</div>
					<div class="divCls-group">
						<div class="divCls-lable">Ages [?]</div>
						<div class="divCls-element">
							<input type="checkbox" class="ckbCls-Age" <?php echo ($Documenttpl->ages=='1' ? 'checked="checked"' : '') ?> id="ckb_ages" name="ckb_ages" value="1">
						</div>
					</div>
				</div>
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
									<img class="img-tab0" src="http://image.issuu.com/<?php echo $Documenttpl->videoid;?>/jpg/page_1_thumb_large.jpg" title="" alt="" />
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
									<img class="img-tab1" src="http://image.issuu.com/<?php echo $Documenttpl->videoid;?>/jpg/page_1_thumb_large.jpg" title="" alt="" />
								</div>
							</div>
							<div id="divIdTable-2" class="cls-table">
								<h4>Mobile Preview</h4>
								<div >
									<div class="divCls-window-iphone"></div>
									<img class="img-tab2" src="http://image.issuu.com/<?php echo $Documenttpl->videoid;?>/jpg/page_1_thumb_large.jpg" title="" alt="" />
								</div>
							</div>
							<div id="divIdTable-3" class="cls-table">
								<h4>Social Networks Preview</h4>
								<div class="divCls-img">
									<img class="img-tab3" src="http://image.issuu.com/<?php echo $Documenttpl->videoid;?>/jpg/page_1_thumb_large.jpg" title="" alt="" />
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
									<img class="img-tab4" src="http://image.issuu.com/<?php echo $Documenttpl->videoid;?>/jpg/page_1_thumb_large.jpg" title="" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<legend><span>Set Budget & Pricing</span></legend>
				<div class="divCls-group">
					<div class="divCls-lable"> Pricing</div>
					<div class="divCls-element">
						<label>Pay per thousand views</label>
					</div>
				</div>
				<div class="divCls-group">
					<div class="divCls-lable">Budget (USD) [?]</div>
					<div class="divCls-element">
						<span class="input-prepend"><span class="add-on">$</span><input type="text" id="campaign_unformatted_budget" name="unformatted_budget" role="budget-value"  value="<?php echo $Documenttpl->budget;?>"></span>
						<select id="campaign_budget_kind" name="budget_kind" role="budget-kind" style="width: 95px;">
							<option value="lifetime" <?php echo $Documenttpl->budget_kind=='lifetime' ? 'selected="selected"' : '';?> >Lifetime</option>
							<option value="per_day" <?php echo $Documenttpl->budget_kind=='per_day' ? 'selected="selected"' : '';?> >Per day</option>
						</select>
						<div class="budget-hint help-block" role="budget-hint">What is the most you want to spend over the campaign\'s scheduled time period? (min $10.00)</div>
					</div>
				</div>
				<div class="divCls-group">
					<div class="divCls-lable">Max Bid (¢) </div>
					<div class="divCls-element">
						<input type="text" value="<?php echo $Documenttpl->max_bid;?>" style="width: 58px;" size="30" role="bid-value" name="unformatted_max_bid" id="campaign_unformatted_max_bid" class="popoverable" data-original-title="" title="">
					
						<div class="budget-hint help-block" role="budget-hint">Maximum you are willing to pay per thousand views in CENTS Suggested Bid : 10¢ - 13¢</div>
					</div>
				</div>
				<div class="divCls-clear"></div>
				<div id="divId-Footer-document">
					<input id="btt-success" name="btt-success" type="submit" class="btn btn-success" value="Save" />
				</div>
		</form>
	</div>
<?php endif;?>