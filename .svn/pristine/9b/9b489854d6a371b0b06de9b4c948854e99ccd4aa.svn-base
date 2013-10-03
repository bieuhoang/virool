<div id="sites-container">
    <a class="btn btn-success add-mysites" href="<?php echo base_url();?>My-Sites/add"><i class="icon-plus icon-white"></i> Add New Site</a>
    <table id="sites" class="table table-hover">
        <thead>
            <tr>
                <th class="site-info">Site</th>
                <th class="site-platforms">Platforms</th>
                <th class="site-api-key">
                    <div class="float-right margin-right-5">
                        <small><a data-toggle="modal" href="#site-integration">How to integrate API</a></small>
                    </div>API Key
                    <span data-placement="top" data-original-title="" data-content="Site key to access Virool API" class="popoverable">[?]</span>
                </th>
                <th class="site-actions">Modify</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($Mysite_info) :?>
            <?php foreach ($Mysite_info as $key => $value) :?>
                <tr>
                    <td class="site-info">
                        <div class="site-name"><?php echo $value->title;?></div>
                        <div class="site-url">
                            <a target="blank" href="<?php echo $value->url;?>"><?php echo $value->url;?></a>
                        </div>
                    </td>
                    <td class="site-platforms">
                        <?php
                            if ( isset($Platform_info) ) {
                                foreach ($Platform_info as $kPlat => $valPlat) {
                                    echo '<span class="label label-info">'.$valPlat->title.'</span>';
                                }
                            }
                        ?>
                    </td>
                    <td class="site-api-key">
                        <div class="text-align-center"><?php echo $value->apikey;?></div>
                    </td>
                    <td class="site-actions">
                        <a title="Edit site" class="btn btn-small btn-info" href="<?php echo base_url();?>My-Sites/edit/<?php echo $value->id;?>"><i class="icon-edit icon-white"></i> Edit</a>
                        <a title="Delete site" rel="nofollow" data-id="<?php echo $value->id;?>" data-method="delete" data-confirm="Are you sure?" class="btn btn-small btn-danger btn-delete-site" href="javascript:;"><i class="icon-remove icon-white"></i> Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
    <div class="sites-pagination float-left"></div>
    <div id="site-integration" class="modal hide fade">
        <div class="modal-header">
            <a data-dismiss="modal" class="close" href="#">x</a>
            <h3>How to integrate API</h3>
        </div>
        <div class="modal-body">
            <div class="offer-widget-container">
                <div class="offer-widget-head clearfix">
                    <div class="font-size-11 float-right">
                        <a target="blank" href="http://www.virool.com/blog/developers/">(tutorial)</a>
                    </div>
                    <div class="font-size-16 bold-font">Offer widget</div>
                </div>
                <div class="offer-widget-details">
                    <input type="text" value="http://api.virool.com/api/v1/offers/[YOUR_SITE_KEY]?userId=[USER_ID]" readonly="readonly" name="offer-widget-url" id="offer-widget-url" class="site-integration-modal-input site-key-autoselect span6">
                    <div class="hint">
                        <small>Request this URL to get the details about our widget offers. Replace [YOUR_SITE_KEY] with your site's API key. Replace [USER_ID] placeholder with id of end-user who is viewing the widget.</small>
                    </div>
                </div>
            </div>
            <div class="offer-wall-container margin-top-10">
                <div class="offer-wall-head clearfix">
                    <div class="font-size-11 float-right">
                        <a target="blank" href="http://www.virool.com/blog/developers/">(tutorial)</a>
                    </div>
                    <div class="font-size-16 bold-font">Offer wall</div>
                </div>
                <div class="offer-wall-details">
                    <input type="text" value="https://api.virool.com/offers/wall/[YOUR_SITE_KEY]?suid=[USER_ID]" readonly="readonly" name="offer-wall-url" id="offer-wall-url" class="site-integration-modal-input site-key-autoselect span6">
                    <div class="hint">
                        <small>Replace [YOUR_SITE_KEY] with your site's API key. Replace [USER_ID] placeholder with id of end-user who is viewing offers.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>