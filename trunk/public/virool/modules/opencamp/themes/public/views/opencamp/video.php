<div class="container">
            <div id="campaign_39386" class="promotion-page">
    <ul class="breadcrumb">
        <li>
            <a href="/promotions">All Promotions</a>
            <span class="divider">→</span>
        </li>
        <li class="active">The Secret of All Viral Videos - Virool</li>
    </ul>
    <div class="clearfix">
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-preview">
                    <h4 class="margin-bottom-5">Widget Preview</h4>
                    <div class="padding-left-10">
                        <iframe width="640" scrolling="no" height="360" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen="" src="http://www.youtube.com/v/<?php echo $Googleapi['items'][0]['id'];?>?height=360&amp;preview=1&amp;width=640"></iframe>
                    </div>
                </div>
                <h4 class="pricing-container margin-top-10"><?php echo $Googleapi['items'][0]['snippet']['title'];?></h4>
                <div data-behavior="EmbedSettings" class="widget-settings marign-left-10 margin-top-15">
                    <h4 class="margin-bottom-10">Embed Settings</h4>
                    <div data-width="640" data-height="360" data-behavior="EmbedSize" class="widget-size options-row clearfix margin-left-10">
                        <div class="setting-option">
                            <div class="option-name pull-left">Widget Size</div>
                            <div class="option-value pull-left margin-left-10">
                                <div class="pull-left">
                                    <a data-width="640" data-option_id="640x360" data-height="360" data-behavior="SizeButton" data-active="true" class="btn aCls-btn-click btn-small btn-primary" href="#">640x360</a>
                                </div>
                                <div class="pull-left margin-left-5">
                                    <a data-width="560" data-option_id="560x315" data-height="315" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">560x315</a>
                                </div>
                                <div class="pull-left margin-left-5">
                                    <a data-width="480" data-option_id="480x270" data-height="270" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">480x270</a>
                                </div>
                                <div class="pull-left margin-left-5">
                                    <a data-width="300" data-option_id="300x200" data-height="200" data-behavior="SizeButton" class="btn btn-small aCls-btn-click" href="#">300x200</a>
                                </div>
                                <div data-width="640" data-option_id="custom" data-height="360" data-behavior="CustomSizeButton" class="custom-size pull-left margin-left-5">
                                    <div class="btn-container"><a class="btn btn-small custom-size-btn btn-custom-a-click" href="#">Custom</a></div>
                                    <div style="display: none;" class="fields-container">
                                        <input type="text" value="640" style="margin-bottom: 0px;" size="4" name="custom[width]" id="custom_width" data-attr="width">x
                                        <input type="text" value="360" style="margin-bottom: 0px;" size="4" name="custom[height]" id="custom_height" data-attr="height">
                                        <a data-width="640" data-height="360" data-behavior="SizeButton" class="btn btn-small btn-a-apply-change-size" href="#">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-value="autoswitch=1" data-behavior="QueryOption" class="options-row clearfix margin-top-10 margin-left-10">
                        <div class="setting-option">
                            <div class="option-name pull-left">Auto Switch</div>
                            <div class="option-value pull-left margin-left-10">
                                <a data-behavior="OnOffButton" class="btn btn-small on-off-btn" href="#">Off</a>
                            </div>
                        </div>
                    </div>
                    <div data-value="without_next=1" data-behavior="QueryOption" class="options-row clearfix margin-top-10 margin-left-10">
                        <div class="setting-option">
                            <div class="option-name pull-left">Next Button</div>
                            <div class="option-value pull-left margin-left-10">
                                <a data-inverse="true" data-behavior="OnOffButton" class="btn btn-next-button btn-small on-off-btn btn-primary" href="#">On</a>
                            </div>
                        </div>
                    </div>
                    <div class="embed-code-row clearfix margin-top-15">
                        <h4>Embed Code</h4>
                        <div class="embed-code margin-left-10">
                            <textarea rows="3" cols="5" readonly="readonly" name="promotion_embed_code" id="promotion_embed_code" data-behavior="EmbedCode"><?php echo $Googleapi['items'][0]['player']['embedHtml'];?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="clearfix targetting-container">
                    <h4 class="margin-bottom-10">Targetting</h4>
                    <div class="margin-left-5">
                        <?php echo $Googleapi['items'][0]['snippet']['description'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>