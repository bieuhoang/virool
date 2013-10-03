$(function(){
    var virool={};
    virool.campaign = {
        html : {
            state : function(that){
                return ('<div class="divCLs-content">')+
                    ('<select id="sel-state" name="sel-state">')+
                        ('<option value="Awaiting deposit">Awaiting deposit</option>')+
                        ('<option value="Paused">Paused</option>')+
                    ('</select>')+
                    ('<button class="btt-change-save-state btn btn-primary editable-submit" data-ele="'+$(that).attr('id')+'" data-type="'+$(that).data('type')+'" data-id="'+$(that).data('id')+'" name="btt-change-budget" ><i class="icon-ok icon-white"></i></button>')+
                    ('<button class="btt-change-cancel-state editable-cancel btn " data-ele="'+$(that).attr('id')+'" name="btt-change-budget " ><i class="icon-remove"></i></button>')+
                ('</div>');
            }
        }
    }
    $('#myTab a').click(function (e) {
	    e.preventDefault();
	    $(this).tab('show');
    });
    $('.tip').tooltip({
        placement : 'right'
    });
	$('.aCls-kind, .aCls-budget-bid').popover({
    	html : true,
    	placement : 'top',
    	title: function(){return 'Update Budget ($)';},
      	content: function(){
      		return ('<div class="divCLs-content">')+
					('<input type="text" id="txtId-budget-kind" name="txtId-budget-kind" value="'+$(this).html()+'" />')+
					('<button class="btt-change-save-budget btn btn-primary editable-submit" data-ele="'+$(this).attr('id')+'" data-type="'+$(this).data('type')+'" data-id="'+$(this).data('id')+'" name="btt-change-budget" ><i class="icon-ok icon-white"></i></button>')+
					('<button class="btt-change-cancel-budget editable-cancel btn " data-ele="'+$(this).attr('id')+'" name="btt-change-budget " ><i class="icon-remove"></i></button>')+
				('</div>');

      	}
	});
    $('a.aCls-State').popover({
        html : true,
        placement : 'top',
        title: function(){return 'Change State';},
        content: function(){
            return virool.campaign.html.state(this);
        }

    })
	$('.btt-change-cancel-budget, , .btt-change-cancel-state').live('click', function(){
		var ele = $(this).data('ele');
        $('#'+ele).click();
	})
    $('.btt-change-save-budget').live('click', function(){
        var budget = $('#txtId-budget-kind').val(), id = $(this).data('id'), type = $(this).data('type');
        var ele = $(this).data('ele');
        $('#'+ele).click();
        if (budget == '') {
            alert('Please fill in all required field.');
            return false;
        }
        if (isNaN(budget)) {
            alert('This field only accepts numbers. Please check it again');
            return false;
        }
        cms.model(
            'campaigns/change',
            {
                action : 'change-'+type,
                item_val : budget,
                item_id: id
            },
            function(data){
                if (cms.isset(data.msg)) {
                    $('#'+ele).empty().append(data.msg);
                }
            }

        )
    })
    $('.btt-change-save-state').live('click', function(){
        var state = $('#sel-state').val(), id = $(this).data('id');
        var ele = $(this).data('ele');
        $('#'+ele).click();
        cms.model(
            'campaigns/change',
            {
                action : 'change-state',
                item_val : state,
                item_id: id
            },
            function(data){
                if (cms.isset(data.msg)) {
                    $('#'+ele).empty().append(data.msg);
                }
            }

        )
    })
})