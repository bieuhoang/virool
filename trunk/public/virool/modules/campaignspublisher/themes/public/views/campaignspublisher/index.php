<div style="padding-bottom: 131px;" id="page" class="container divClsContainer">
    
    <div class="divCls-content-campaign">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home">Running</a></li>
                <li><a href="#profile">Completed</a></li>
                <li><a href="#messages">Paused / Pending</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <table id="table-home">
                        <thead>
                            <th class="image">Image</th>
                            <th class="campaign-info">Campaign Info</th>
                            <th class="Apitoken">Embed Code</th>
                            <th class="Views">Views</th>
                            <!-- <th class="Clicks">Clicks</th> -->
                        </thead>
                        <tbody>
                            <?php if ($DocumentRunTpl) : ?>
                                <?php foreach ($DocumentRunTpl as $keyRun => $valueRun) :?>
                                    <tr>
                                        <td>
                                            <?php echo $valueRun['images'];?>
                                        </td>
                                        <td>
                                            <?php echo $valueRun['title'];?>
                                        </td>
                                        <td align="center">
                                            <textarea class="txtarea" name="txtarea" readonly="true" >
                                                <iframe src="<?php echo base_url().'api/'.$valueRun['tokenapi'] ;?>/400x300" width="400" height="300" frameborder="0" allowfullscreen="true"></iframe>
                                            </textarea>                                            
                                        </td>
                                        <td align="center">
                                            <span class="badge badge-success"><?php echo $valueRun['views'];?></span>
                                        </td>
                                        <!-- <td align="center">
                                            <span class="badge badge-success"> -->
                                                <?php /*echo $valueRun['click']*/;?>
                                            <!-- </span>
                                        </td> -->
                                    </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="profile">
                    <table id="table-profile">
                        <thead>
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
                            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="messages">
                    <table id="table-profile">
                        <thead>
                            <th class="image">Image</th>
                            <th class="campaign-info-pending">Campaign Info</th>
                            <th class="Action">Action</th>
                            <th class="Views">Views</th>
                            <!-- <th class="Clicks">Clicks</th> -->
                        </thead>
                        <tbody>
                        <?php if ($DocumentPendingTpl) : ?>
                                <?php foreach ($DocumentPendingTpl as $keyPending => $valuePending) :?>
                                    <tr>
                                        <td>
                                            <?php echo $valuePending['images'];?>
                                        </td>
                                        <td>
                                            <?php echo $valuePending['title'];?>
                                        </td>
                                        <td align="center">
                                            <?php echo $valuePending['action'];?>
                                        </td>
                                        <td align="center">
                                            <span class="badge badge-success"><?php echo $valuePending['views'];?></span>
                                        </td>
                                        <!-- <td align="center">
                                            <span class="badge badge-success"> -->
                                                <?php /*echo $valuePending['click'];*/?>
                                            <!-- </span>
                                        </td> -->
                                    </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>