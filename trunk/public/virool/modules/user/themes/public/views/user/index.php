<div class="container">
	<div class="body-usr-info">
		
		<div style="padding-bottom: 131px;" id="page" class="container divClsContainer">
    <div class="divCls-content-campaign">
        <div class="divCls-Group">
            <div class="float-left font-size-15">
            Your Balance:
            </div>
            <div class="float-left font-size-16 bold margin-left-15 balance-amount">
            <a title="Go to My Finances page" href="/finances">$0.00</a>
            </div>
            <div style="margin-top: -5px;" class="float-left margin-left-15">
            <a href="#divId-make-pupop" id="aId-makeapayment" role="button" class="btn btn-success btn-block" data-toggle="modal">Make a payment</a>
            </div>
        </div>
    </div>
    <div class="divCls-content-campaign">
        <div class="tab-pane" id="messages">
            <table id="table-profile">
                <thead>
                    <th></th>
                    <th class="campaign-info">Campaign Info</th>
                    <th class="Budget">Budget</th>
                    <th class="Bid">Bid</th>
                    <th class="Displays">Displays</th>
                    <th class="Views">Views</th>
                    <th class="Clicks">Clicks</th>
                    <th class="Funds">Funds</th>
                    <th class="State">State</th>
                    <th class="Actions">Actions</th>
                </thead>
                <tbody>
                <?php foreach ($Video_Paused_Pending as $keypending => $valpending) : ?>
                <?php 
                    if ($valpending->type=='Video') {
                        $img = explode(':::', $valpending->images);
                        $img = $img[0];
                    } else {
                        $img = 'http://image.issuu.com/'.$valpending->videoid.'/jpg/page_1_thumb_large.jpg';
                    }   
                 ?>
                    <tr>
                        <td>
                            <img class="imgCls-info" src="<?php echo $img;?>" >
                        </td>
                        <td>
                            <?php echo $valpending->title;?>
                        </td>
                        <td align="center">
                            <a class="aCls-kind tip " id="aId-kind-<?php echo $valpending->id;?>" data-type="kind" title="Update Max Bid (¢)" data-id="<?php echo $valpending->id;?>" href="javascript:;" ><?php echo $valpending->budget;?></a>
                            <div class="divCls-budget_kind"><?php echo $valpending->budget_kind;?></div>
                        </td>
                        <td align="center">
                            <a class="aCls-budget-bid tip" id="aId-bid-<?php echo $valpending->id;?>" data-type="bid" title="Update Max Bid (¢)" data-id="<?php echo $valpending->id;?>" href="javascript:;" ><?php echo $valpending->max_bid;?></a>
                            <div class="divCls-budget_kind">CPV</div>
                        </td>
                        <td align="center"><?php echo $valpending->display;?></td>
                        <td align="center"><?php echo $valpending->views;?></td>
                        <td align="center"><?php echo $valpending->clicks;?></td>
                        <td align="center"><div class="divCls-Funds"></div></td>
                        <td align="center"><a class="aCls-State tip" id="aId-state-<?php echo $valpending->id;?>" data-type="state" data-id="<?php echo $valpending->id;?>" title="Change State" href="javascript:;" ><?php echo $valpending->state;?></a></td>
                        <td align="center">
                            <a class="btn "  href="<?php echo base_url().($valpending->type=='Video' ? 'Manage-Campaigns' : 'Promote-Document');?>/edit/<?php echo $valpending->id;?>" ><i class="icon-edit"></i> Edit</a>
                            <a id="stats-btn" class="btn btn-info" href="/campaigns/39705">Stats</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

	</div>
</div>