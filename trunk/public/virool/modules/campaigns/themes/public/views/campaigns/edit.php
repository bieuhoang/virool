<div class="container divCls-youtube-details-display"> 
	<form action="<?php echo base_url();?>Manage-Campaigns" method="post">
			<div class="divCls-group-form">
				<input type="hidden" name="id" id="id" value="<?php echo $Videotpl->id;?>" />
                                <input type="hidden" name="videoid" id="videoid" value="<?php echo $Videotpl->videoid;?>" />
                                <input type="hidden" name="current_page" id="current_page" value="edit_video" />
				<legend><span>Design your campaign</span></legend>
				<div class="control-group">
					
                                        <div class="margin-top-5">
                                        <input type="button" class="aCls-Change" value="Change..."/>
                                        </div>
					<div class="controls">
						<object width="520" height="310"><param name="movie" value="http://www.youtube.com/v/<?php echo $Videotpl->videoid;?>"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/<?php echo $Videotpl->videoid;?>" type="application/x-shockwave-flash" width="520" height="310" allowscriptaccess="always" allowfullscreen="true"></embed></object>
						<div id="offer-info" role="info-container">
							<div class="divCls-Caption-Content">Description</div>
							<div class="logo-content"><a target="blank" href="<?php echo base_url();?>"><span class="spanCls-Logo"></span></a></div>
						</div>
					</div>
				</div>
				<div id="campaign_name_input" class="string input optional stringish control-group">
					<label for="campaign_name" class=" control-label">Campaign name</label>
					<div class="controls"><input type="text" class="fieldstxt" value="<?php echo $Videotpl->title;?>" role="campaign-title" placeholder="Campaign name (not shown to your audience)" name="name" maxlength="255" id="campaign_name" data-original-title="Campaign name" data-content="This title is for your records only.<br><b>Example:</b> <i>My music video</i>"/></div>
				</div>
				<div id="campaign_body_input" class="text input optional control-group">
					<label for="campaign_body" class=" control-label">Video description <small title="" style="color:#666;" data-original-title="Description is shown under the video">[?]</small></label>
					<div class="controls"><textarea rows="5" role="campaign-description" placeholder="Short description" name="body" id="campaign_body" data-original-title="Video description" data-content="Description is shown under the video.<br><b>Example:</b> <i>Check out this amazing video</i>" class="listen-typing span6 popoverable"><?php echo $Videotpl->caption;?></textarea></div>
				</div>
				<div id="campaign_url_input" class="url input optional stringish control-group">
					<label for="campaign_url" class=" control-label">Link URL <small title="" style="color:#666;" data-original-title="Your link to your site">[?]</small></label>
					<div class="controls"><input type="text" role="external-link" value="<?php echo $Videotpl->link_url;?>" placeholder="URL link to your song, fan page, site" name="url" maxlength="255" id="campaign_url" data-original-title="Link URL" data-content="Link will be show under the video, before the description.<br><b>Example:</b> <i>http://yoursite.com/</i>" class="listen-typing span6 popoverable"></div>
				</div>
				<div id="campaign_url_caption_input" class="string input optional stringish control-group">
					<label for="campaign_url_caption" class=" control-label">Link title <small title="" style="color:#666;" data-original-title="Title for the link">[?]</small></label>
					<div class="controls"><input type="text" role="external-link-caption" value="<?php echo $Videotpl->link_title;?>" placeholder="Visit our site, download our song, buy our product" name="url_caption" maxlength="255" id="campaign_url_caption" data-original-title="Link caption" data-content="Description of the URL link. <br><b>Example:</b> <i>Visit my page.</i>" class="listen-typing span6 popoverable"></div>
				</div>
			</div>
			<div class="divCls-group-form">
				<legend><span>Targeting</span></legend>
				<div class="divCls-group-form-left">
					<div class="divCls-group-elemtn">
						<label for="campaign_platform_list" class="control-label">Ad Placements <small title="" style="color:#666;" data-original-title="Type of publishers that will be able to show your ad">[?]</small></label>
						<div class="controls">
							<?php $Placements = explode(',', $Videotpl->ad_placements);?>
							<label class="choice radio"><input type="radio" value="blogs,games,mobile,social,virtual_currency" role="platforms-all-radio" name="platform_list" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" <?php echo (count($Placements)==5 ? 'checked="checked"' : '');?> >All</label>
							<label class="choice radio"><input type="radio" value="blogs,games,mobile,social,virtual_currency" role="platforms-specific-radio" name="platform_list" id="campaign_platform_list_blogsgamesmobilesocialvirtual_currency" <?php echo (count($Placements)<5 ? 'checked="checked"' : '');?> >Let me choose...</label>
						</div>
					</div>
					<div class="divCls-group-elemtn divCls-popover-Gender" data-original-title="Keywords targeting" data-content="We use relevant keywords to target your video.<br><b>Example:</b> <i>music, jazz</i>">
						<label for="campaign_tag_list" class=" control-label">Keywords <small title="" style="color:#666;" data-original-title="Keywords(comma separated). We use relevant keywords to better target ads on sites">[?]</small></label>
						<div class="controls">
							<select role="country-select" multiple="true" id="Keywords_list" name="Keywords_list[]" data-placeholder="Keywords" class="selec-chosen">
							<?php 
							$arrKey = json_decode($Videotpl->keywords);
							foreach ($arrKey as $k => $val) {
								echo '<option value="'.$val.'" selected="selected">'.$val.'</option>';
							}
							?>
							</select>
						</div>
					</div>
					<div class="divCls-group-elemtn divCls-popover-Gender" data-original-title="Categorys" data-content="Categorys">
						<label for="campaign_tag_list" class=" control-label">Categorys</label>
						<div class="controls">
							<select role="categorys-select" multiple="true" id="categorys_list" name="categorys_list[]" data-placeholder="Categorys" class="selec-chosen">
							<?php 
							$arrCate = array();
							foreach ($Videotpl->category->get() as $key => $value) {
								$arrCate[] = $value->id;
							}
							foreach ($Categorystpl as $kcate => $valcate) {
								echo '<option value="'.$valcate->id.'" '.((is_array($arrCate) AND in_array($valcate->id, $arrCate)) ? 'selected="selected"' : '').' >'.$valcate->name.'</option>';
							}
							?>
							</select>
						</div>
					</div>
					<div class="divCls-group-elemtn divCls-popover-Gender" data-original-title="Countries" data-content="Countries, your video will be targeted to.<br><b>Example:</b> <i>United States, Canada</i>">
						<div id="campaign_target_list_input" class="select input optional control-group">
							<label for="campaign_target_list" class=" control-label">Countries <small title="" style="color:#666;" data-original-title="Countries that you target">[?]</small></label>
							<div class="controls">
								<select role="country-select" name="target_list[]" multiple="true" id="campaign_target_list" data-placeholder="Choose countries..." class="selec-chosen" >
									<?php 
									$arrcountries = array();
									foreach ($Videotpl->country->get() as $key => $value) {
										$arrcountries[] = $value->id;
									}
									foreach ($Optiontpl as $key => $value) {
										echo '<option value="'.$value->id.'" '.((is_array($arrcountries) AND in_array($value->id, $arrcountries)) ? 'selected="selected"' : '').' >'.$value->name.'</option>';
									}
									?>
								</select>
								<span class="help-block">leave this field blank to target campaign globally</span>
							</div>
						</div>
					</div>
					<div class="divCls-group-elemtn divCls-popover-Gender" data-original-title="Gender targeting" data-content="Gender of people to which your video will be shown." >
						<label for="campaign_gender" class=" control-label">Gender <small title="" style="color:#666;" data-original-title="When are able to obtain gender of viewer - we will be matching it with your targeting">[?]</small></label>
						<div class="controls">
							<label for="campaign_gender_a" class="choice radio"><input type="radio" value="all" name="gender" id="campaign_gender_a" <?php echo ((isset($Videotpl->gender) AND $Videotpl->gender=='all') ? 'checked="checked"' : '');?> >All</label>
							<label for="campaign_gender_m" class="choice radio"><input type="radio" value="males" name="gender" id="campaign_gender_m" <?php echo ((isset($Videotpl->gender) AND $Videotpl->gender=='males') ? 'checked="checked"' : '');?> >Males</label>
							<label for="campaign_gender_f" class="choice radio"><input type="radio" value="females" name="gender" id="campaign_gender_f" <?php echo ((isset($Videotpl->gender) AND $Videotpl->gender=='females') ? 'checked="checked"' : '');?> >Females</label>
						</div>
					</div>
					<div class="divCls-group-elemtn divCls-popover-Gender" data-original-title="Age groups targeting" data-content="Age groups of people to which your video will be shown.">
						<label for="campaign_platform_list" class="control-label">Ages  <small title="" style="color:#666;" data-original-title="Type of publishers that will be able to show your ad">[?]</small></label>
						<div class="controls">
							<label style="padding-right: 8px;" for="campaign_ages_0"><input type="checkbox" value="all" role="age-group" name="ages" id="campaign_ages_0" data-id="0" class="age-group-field" <?php echo ((isset($Videotpl->ages) AND $Videotpl->ages=='all') ? 'checked="checked"' : '');?> >All</label>
						</div>
					</div>
				</div>
				<?php
					$img= explode(':::', $Videotpl->images);
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
			</div>
			<div class="divCls-group-form">
				<legend><span>Design your campaign</span></legend>
				<div class="control-group">
					<div id="campaign_budget_input" class="input optional control-group divCls-popover" data-original-title="Campaign Budget" data-content="Budget be spent for your campaign<br><br><b>Per day:</b>Maximum amount to spend per day. You should choose this type of budget if you want your video to be shown every day for some period.<br><b>Example:</b> <i>You deposit $1000 and set daily budget to $100 - your campaign will be runned at least 10 days with $100 or less spent per day (depends on maximum bid you set).</i><br><br><b>Lifetime:</b> Overall amount to spend for campaign. It will be delivered as fast as possible - whenever we find suitable placements. <br/>Campaigns with smalelr budget may ran out of money very fast - in minutes. It will be suspended after it runs out of money." >
						<label id="campaign_unformatted_budget_label" for="campaign_unformatted_budget" class="control-label">Budget (USD) <small title="" style="color:#666;" data-original-title="How much are you willing to spend?">[?]</small></label>
						<div class="controls">
							<div class="campaign_budget_input" style="display:none; width:10px;height:10px; position: absolute;right: 450px;top: 0;"></div>
							<span class="input-prepend">
								<span class="add-on">$</span>
								<input type="text" value="<?php echo $Videotpl->budget;?>" style="width: 60px;" size="30" role="budget-value" name="unformatted_budget" id="campaign_unformatted_budget" />
							</span>							
							<select style="width: 95px;" role="budget-kind" name="budget_kind" id="campaign_budget_kind">
								<?php if ($Videotpl->budget_kind=='lifetime'):?>
									<option value="lifetime" >Lifetime</option>
									<option value="per_day" >Per day</option>
								<?php else : ?>
									<option value="per_day" >Per day</option>
									<option value="lifetime" >Lifetime</option>
								<?php endif;?>
							</select>
							<div role="budget-hint" class="budget-hint help-block">What is the most you want to spend over the campaign\'s scheduled time period? (min $10.00)</div>
						</div>
					</div>
				</div>
				<div id="campaign_pricing_input" data-pricing="cpm" class="input optional control-group divCls-popover" data-original-title="Pricing type" data-content="You will be charged only if someone watched your video for 30 seconds or longer. Clicks and shares come for free." >
					<label class="control-label">Pricing</label>
					<div class="controls padding-top-5">Pay per View (CPV)
						<div class="campaign_pricing_input" style="display:none; width:10px;height:10px; position: absolute;right: 450px;top: 0;"></div>
					</div>
				</div>
				<div id="campaign_unformatted_max_bid_input" class="ads-maxbid-container divCls-popover input optional control-group" data-original-title="Maximum Bid" data-content="Maximum you are willing to pay per view in cents.<br> The more bid you set - the faster you gain views. Bid amount depends on targeting – detailed targeting needs higher bids.">
					<label id="campaign_unformatted_max_bid_label" for="campaign_unformatted_max_bid" class="control-label">Max Bid (¢) <small title="" style="color:#666;" data-original-title="This is a maximum you are willing to pay per view. Since we run real-time auction you will always pay minimum price. Higher bid will get your views faster.">[?]</small></label>
					<div class="controls">
						<div class="campaign_unformatted_max_bid_input" style="display:none; width:10px;height:10px; position: absolute;right: 450px;top: 0;"></div>
						<div class="input-append">
							<input type="text" value="<?php echo $Videotpl->max_bid;?>" style="width: 58px;" size="30" role="bid-value" name="unformatted_max_bid" id="campaign_unformatted_max_bid" class="popoverable" data-original-title="" title="">
							<span class="add-on">¢</span>
						</div>
						<div id="divId-Help-Block" class="help-block">
							<div class="max-bid-hint">Maximum you are willing to pay per view in<span class="museo-bold">CENTS</span></div>
							<div class="max-bid-suggestion">Suggested Bid: <span role="bid-suggested-interval">10¢ - 13¢</span></div>
						</div>
					</div>
				</div>
				<div id="campaign_unformatted_max_bid_input" class="ads-maxbid-container divCls-popover input optional control-group" data-original-title="Maximum Bid" data-content="Maximum you are willing to pay per view in cents.<br> The more bid you set - the faster you gain views. Bid amount depends on targeting – detailed targeting needs higher bids.">
					<fieldset style="margin-top:30px; padding-left:180px" class="form-actions">
						<input type="submit" id="btt-submit" name="button" data-disable-with="Submitting..." class="btn btn-primary" value="Update Campaign" />
						<a class="btn btn-link" href="/campaigns">Back To Campaigns</a>
					</fieldset>
				</div>
			</div>
		</div>
	</form>
</div>