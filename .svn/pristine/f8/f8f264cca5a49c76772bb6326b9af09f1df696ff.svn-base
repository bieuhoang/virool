<div id="edit-blog-form">
    <form novalidate="novalidate" method="post" id="edit_site_9340" enctype="multipart/form-data" class="formtastic form-horizontal site" action="<?php echo isset($Mysite_tpl->id) ? base_url().'My-Sites/edit/'.$Mysite_tpl->id : base_url().'My-Sites/add';?>" accept-charset="UTF-8">
        <div style="margin:0;padding:0;display:inline">
            <input type="hidden" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->id :0;?>" name="sites_id" id="sites_id">
        </div>
        <div class="row">
            <div class="span9">
                <fieldset class="inputs">
                    <legend><span>General Info</span>
                    </legend>
                    <div id="site_name_input" class="string input optional stringish control-group">
                        <label for="site_name" class=" control-label">Title</label>
                        <div class="controls">
                            <input type="text" placeholder="Title of your site or application" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->title : '';?>" name="site_name" maxlength="255" id="site_name" data-original-title="Site title" data-content="This title is for your records only.&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;i&gt;My site&lt;/i&gt;"
                            class="span6 popoverable">
                        </div>
                    </div>
                    <div id="site_url_input" class="string input required stringish control-group">
                        <label for="site_url" class=" control-label">Site URL</label>
                        <div class="controls">
                            <input type="text" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->url : '';?>" placeholder="" name="site_url" maxlength="255" id="site_url" data-original-title="Site URL" data-content="&lt;b&gt;Example:&lt;/b&gt; &lt;i&gt;http://yoursite.com/&lt;/i&gt;"
                            class="span6 popoverable">
                        </div>
                    </div>
                    <div id="site_description_input" class="text input optional control-group">
                        <label for="site_description" class=" control-label">Site description</label>
                        <div class="controls">
                            <textarea rows="5" placeholder="Short description" name="site_description" id="site_description" data-original-title="Site description" data-content="Briefly describe your site.&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;i&gt;Online game for teenage girls with focus on dating and social interaction."
                            class="span6 popoverable"><?php echo isset($Mysite_tpl) ? $Mysite_tpl->description : '';?></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="inputs">
                    <legend><span>Targeting</span>
                    </legend>
                    <div id="site_platform_list_input" class="select input optional control-group">
                        <label for="site_platform_list" class=" control-label">Platforms</label>
                        <div class="controls">
                            <select role="platform-select" name="site_platform_list[]" multiple="multiple" id="site_platform_list" data-placeholder="Choose platforms..." class="span6 select2-offscreen selec-chosen" >
                            <?php foreach ($Platforms_tpl as $kplat => $valplat) :?>
                                <option value="<?php echo $valplat->id;?>" <?php echo (!empty($Mysite_tpl) AND in_array($valplat->id, json_decode($Mysite_tpl->platforms))) ? 'selected="selected"' : '';?> ><?php echo $valplat->title;?></option>
                            <?php endforeach;?>
                            </select>
                            <span class="help-block"><span class="span6 red-hint">Make sure to set relevant platform type for your site. Setting invalid type will result in your account suspension.</span></span>
                        </div>
                    </div>
                    <div id="site_target_list_input" class="select input optional control-group">
                        <label for="site_target_list" class=" control-label">Countries</label>
                        <div class="controls">
                            <select role="country-select" name="site_countries[]" multiple="multiple" id="site_countries" data-placeholder="Choose a country..." class="span6 select2-offscreen selec-chosen" tabindex="-1">
                            <?php foreach ($Countries_tpl as $kCoun => $valCoun) :?>
                                <option value="<?php echo $valCoun->id;?>" <?php echo (!empty($Mysite_tpl) AND in_array($valCoun->id, json_decode($Mysite_tpl->countries))) ? 'selected="selected"' : '';?> ><?php echo $valCoun->name;?></option>
                            <?php endforeach;?>    
                            </select>
                            <span class="help-block">leave this field blank to target site globally</span>
                        </div>
                    </div>
                    <div id="site_target_list_category" class="select input optional control-group">
                        <label for="site_target_list_category" class=" control-label">Categorys</label>
                        <div class="controls">
                            <select role="categorys-select" name="site_categorys[]" multiple="multiple" id="site_categorys" data-placeholder="Choose a categorys..." class="span6 select2-offscreen selec-chosen" tabindex="-1">
                            <?php foreach ($Categorys_tpl as $kCate => $valCate) :?>
                                <option value="<?php echo $valCate->id;?>" <?php echo (!empty($Mysite_tpl) AND in_array($valCate->id, json_decode($Mysite_tpl->categorys_id))) ? 'selected="selected"' : '';?> ><?php echo $valCate->name;?></option>
                            <?php endforeach;?>    
                            </select>
                            <span class="help-block">leave this field blank to target site globally</span>
                        </div>
                    </div>
                    <div id="site_tag_list_input" class="string input optional stringish control-group">
                        <label for="site_tag_list" class=" control-label">Keywords</label>
                        <div class="controls">
                            <input type="text" name="site_keywords" id="site_keywords" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->keywords : '';?>" class="select2-input select2-default" autocomplete="off" style="width: 507px;">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="inputs">
                    <legend><span>Virtual Currency</span>
                    </legend>
                    <div id="site_currency_name_input" class="string input optional stringish control-group">
                        <label for="site_currency_name" class="control-label">Currency</label>
                        <div class="controls">
                            <span class="font-size-18">1&nbsp;</span>
                            <input type="text" style="width: 100px" size="30" placeholder="Coin" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->currency : '';?>" name="site_currency_name" id="site_currency_name">
                            <span class="font-size-18">&nbsp;=&nbsp;</span>
                            <input type="text" style="width: 82px" size="30" placeholder="0.01" <?php echo isset($Mysite_tpl) ? $Mysite_tpl->currency_conversion_rate : '';?> name="site_currency_conversion_rate" id="site_currency_conversion_rate">
                            <span>&nbsp;USD</span>
                        </div>
                    </div>
                    <div style="float:left; margin: -38px 0 0 476px;" data-template="" data-original-title="Virtual currency" data-content="If you pay your users with virtual currency, you should specify the name of currency and conversion rate.&lt;br&gt;&lt;b&gt;Example:&lt;/b&gt; Your virtual currency is Coin where 1 Coin is equal to 2 Cents. Suppose we have video with 6 cents price for view. User watches the video and earns 3 Coins."
                    class="popover_div"></div>
                    <div id="site_callback_url_input" class="string input optional stringish control-group">
                        <label for="site_callback_url" class=" control-label">
                            Callback URL
                            <small title="" data-original-title="This is an URL that we will hit once user successfully watched our video and we will reward you with credits">[?]</small>
                        </label>
                        <div class="controls">
                            <input type="text" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->callback_url : '';?>" placeholder="http://www.yoursite.com/callback_url?user=[USER_ID]&amp;tracking=[TRACKING_ID]&amp;reward=[REWARD]&amp;reward_usd=[REWARD_USD]" name="site_callback_url" maxlength="255" id="site_callback_url" class="span6">
                            <span class="help-block">URL can contain the following placeholders:<br>[USER_ID], [TRACKING_ID], [REWARD], [REWARD_USD], [TIMESTAMP], [SIGNATURE]</span>
                        </div>
                    </div>
                    <div style="float:left; margin: -84px 0 0 700px;" data-original-title="Callback URL" data-content="This is an URL that we will hit once user successfully watched our video and we will reward you with credits." class="popover_div"></div>
                    <div id="site_signature_input" class="string input optional stringish control-group">
                        <label for="site_signature" class=" control-label">Signature template</label>
                        <div class="controls">
                            <input type="text" value="<?php echo isset($Mysite_tpl) ? $Mysite_tpl->signature_template : '';?>" placeholder="[USER_ID][TRACKING_ID][REWARD][TIMESTAMP]"  maxlength="255" name="site_signature_template" id="site_signature" class="span6">
                            <span class="help-block">Signature can contain the following placeholders:<br>[USER_ID], [TRACKING_ID], [REWARD], [REWARD_USD], [TIMESTAMP]</span>
                        </div>
                    </div>
                    <div id="site_digest_method_input" class="radio_buttons input optional control-group">
                        <label for="site_digest_method" class=" control-label">Encryption method</label>
                        <div class="controls">
                            <label for="site_digest_method_plain_digest" class="choice radio">
                                <input type="radio" value="plain" <?php echo (isset($Mysite_tpl) and $Mysite_tpl->encryption_method=='plain') ? 'checked="checked"' : '';?> name="site_digest_method" id="site_digest_method_plain_digest" checked="checked">Plain</label>
                            <label for="site_digest_method_md5_digest" class="choice radio">
                                <input type="radio" value="md5" <?php echo (isset($Mysite_tpl) and $Mysite_tpl->encryption_method=='md5') ? 'checked="checked"' : '';?> name="site_digest_method" id="site_digest_method_md5_digest">MD5</label>
                            <label for="site_digest_method_sha1_digest" class="choice radio">
                                <input type="radio" value="sha1" <?php echo ( isset($Mysite_tpl) and $Mysite_tpl->encryption_method=='sha1') ? 'checked="checked"' : '';?> name="site_digest_method" id="site_digest_method_sha1_digest">SHA1</label>
                            <label for="site_digest_method_hmac_md5_digest" class="choice radio">
                                <input type="radio" value="hmacmd5" <?php echo (isset($Mysite_tpl) and $Mysite_tpl->encryption_method=='hmacmd5') ? 'checked="checked"' : '';?> name="site_digest_method" id="site_digest_method_hmac_md5_digest">HMAC MD5</label>
                            <label for="site_digest_method_hmac_sha1_digest" class="choice radio">
                                <input type="radio" value="hmacsha1" <?php echo (isset($Mysite_tpl) and $Mysite_tpl->encryption_method=='hmacsha1') ? 'checked="checked"' : '';?> name="site_digest_method" id="site_digest_method_hmac_sha1_digest">HMAC SHA1</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-actions">
                    <input type="submit" value="Update Site" name="commit" class="btn btn-primary btn-success">
                </fieldset>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="span9">
            <fieldset class="inputs">
                <legend><span>Placements screenshots</span></legend>
                <div id="list-all-img">
                    <?php 
                        if (isset($Mysite_tpl) AND $Mysite_tpl->siteimg->get()->count()) {
                            foreach ($Mysite_tpl->siteimg->get() as $key => $value) {
                                echo '
                                <div id="img-dele-'.$value->id.'" class="element-img">
                                    <img src="'.base_url().$value->url.'" class="img-size-100-80" title="" alt="" />
                                    <a href="javascript:;" data-id="'.$value->id.'" class="dele-img dele-img-click" title="" alt=""></a>
                                </div>';
                            }

                        }
                    ?>

                </div>
                <div class="add-link">
                   <div class="divCls-group divClsBrowfile">
                        <input id="file_upload" type="file" name="Filedata" />
                    </div>
                </div>
                <fieldset class="form-actions">
                    <a id="ahrefUploadFyUpload" href="javascript:$('#file_upload').uploadifyUpload()">Upload Files</a>
                </fieldset>
            </fieldset>
        </div>
    </div>
</div>