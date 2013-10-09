$(function(){
	$('.selec-chosen').chosen();

	$('a.aclsslide').live('click', function(){
		var id = $(this).data('id'), _this= this;
		$.each($(this).parent().parent().find('li'), function(){
			if ( $(this).hasClass('active') ) {
				$(this).removeClass('active');
			}
		});
		$(_this).parent().addClass('active');
		$('.divCls-Tab').removeClass('active');
		$('#dicCls-Slideshow-img-'+id).addClass('active');
	});
	$('a.aCls-table-left').live('click', function(){
		var _this = this, id = $(_this).data('id');
		$('ul.ulCls-Content-left li').removeClass('active');
		$(_this).parent().addClass('active');
		$('div.cls-table').removeClass('active');
		$('div#divIdTable-'+id).addClass('active');
	});
	$('a.aclsslide-facebook').live('click', function(){
		var id= $(this).data('id');
		$('.slideshow-img-facebook > ul  li').removeClass('active');
		$('.divCls-Tab-network').removeClass('active');
		$('#dicCls-Slideshow-network-img-'+id).addClass('active');
		$(this).parent().addClass('active');
	});
        $('input[type="button"].aCls-Change').live('click', function(){
            var text = '<div class="container divCls-minheight">' +
                        '<div id="form-search" >' +
                                    '<h3 class="margin-bottom-0">Change Your YouTube Video</h3>'+
                                    '<p>You are 1-step away from starting your video campaign</p>'+
                                    '<p class="margin-top-10">Search video by title or just paste YouTube video URL:</p>'+
                                    '<input type="text" role="search-query" id="inputIdValSearch" placeholder="YouTube video URL or title" class="inputCls-value-search">'+
                                    '<button class="inputCls-button-search" id="buttonSearch" type="button" role="search-button" >Search</button>'+
                            '</div>'+
                            '<div id="results"></div>'+
                            '<script src="../../public/virool/modules/promotevideo/themes/public/assets/js/promotevideo.js" type="text/javascript"></script>'+
                            '<script src="assets/js/forms/jquery.chosen.min.js" type="text/javascript"></script>'+
                            '<script type="text/javascript">' +
                            'window.countries = [{"id":1,"title":"United States"},{"id":2,"title":"Canada"},{"id":3,"title":"Albania"},{"id":4,"title":"Algeria"},{"id":5,"title":"American Samoa"},{"id":6,"title":"Andorra"},{"id":7,"title":"Angola"},{"id":8,"title":"Anguilla"},{"id":9,"title":"Antarctica"},{"id":10,"title":"Antigua and\/or Barbuda"},{"id":11,"title":"Argentina"},{"id":12,"title":"Armenia"},{"id":13,"title":"Aruba"},{"id":14,"title":"Australia"},{"id":15,"title":"Austria"},{"id":16,"title":"Azerbaijan"},{"id":17,"title":"Bahamas"},{"id":18,"title":"Bahrain"},{"id":19,"title":"Bangladesh"},{"id":20,"title":"Barbados"},{"id":21,"title":"Belarus"},{"id":22,"title":"Belgium"},{"id":23,"title":"Belize"},{"id":24,"title":"Benin"},{"id":25,"title":"Bermuda"},{"id":26,"title":"Bhutan"},{"id":27,"title":"Bolivia"},{"id":28,"title":"Bosnia and Herzegovina"},{"id":29,"title":"Botswana"},{"id":30,"title":"Bouvet Island"},{"id":31,"title":"Brazil"},{"id":32,"title":"British lndian Ocean Territory"},{"id":33,"title":"Brunei Darussalam"},{"id":34,"title":"Bulgaria"},{"id":35,"title":"Burkina Faso"},{"id":36,"title":"Burundi"},{"id":37,"title":"Cambodia"},{"id":38,"title":"Cameroon"},{"id":39,"title":"Cape Verde"},{"id":40,"title":"Cayman Islands"},{"id":41,"title":"Central African Republic"},{"id":42,"title":"Chad"},{"id":43,"title":"Chile"},{"id":44,"title":"Christmas Island"},{"id":45,"title":"Cocos (Keeling) Islands"},{"id":46,"title":"Colombia"},{"id":47,"title":"Comoros"},{"id":48,"title":"Congo"},{"id":49,"title":"Cook Islands"},{"id":50,"title":"Costa Rica"},{"id":51,"title":"Croatia (Hrvatska)"},{"id":52,"title":"Cuba"},{"id":53,"title":"Cyprus"},{"id":54,"title":"Czech Republic"},{"id":55,"title":"Denmark"},{"id":56,"title":"Djibouti"},{"id":57,"title":"Dominica"},{"id":58,"title":"Dominican Republic"},{"id":59,"title":"East Timor"},{"id":60,"title":"Ecudaor"},{"id":61,"title":"Egypt"},{"id":62,"title":"El Salvador"},{"id":63,"title":"Equatorial Guinea"},{"id":64,"title":"Eritrea"},{"id":65,"title":"Estonia"},{"id":66,"title":"Ethiopia"},{"id":67,"title":"Falkland Islands (Malvinas)"},{"id":68,"title":"Faroe Islands"},{"id":69,"title":"Fiji"},{"id":70,"title":"Finland"},{"id":71,"title":"France"},{"id":72,"title":"French Guiana"},{"id":73,"title":"French Polynesia"},{"id":74,"title":"French Southern Territories"},{"id":75,"title":"Gabon"},{"id":76,"title":"Gambia"},{"id":77,"title":"Georgia"},{"id":78,"title":"Germany"},{"id":79,"title":"Ghana"},{"id":80,"title":"Gibraltar"},{"id":81,"title":"Greece"},{"id":82,"title":"Greenland"},{"id":83,"title":"Grenada"},{"id":84,"title":"Guadeloupe"},{"id":85,"title":"Guam"},{"id":86,"title":"Guatemala"},{"id":87,"title":"Guinea"},{"id":88,"title":"Guinea-Bissau"},{"id":89,"title":"Guyana"},{"id":90,"title":"Haiti"},{"id":91,"title":"Heard and Mc Donald Islands"},{"id":92,"title":"Honduras"},{"id":93,"title":"Hong Kong"},{"id":94,"title":"Hungary"},{"id":95,"title":"Iceland"},{"id":96,"title":"India"},{"id":97,"title":"Indonesia"},{"id":98,"title":"Iraq"},{"id":99,"title":"Ireland"},{"id":100,"title":"Israel"},{"id":101,"title":"Italy"},{"id":102,"title":"Ivory Coast"},{"id":103,"title":"Jamaica"},{"id":104,"title":"Japan"},{"id":105,"title":"Jordan"},{"id":106,"title":"Kazakhstan"},{"id":107,"title":"Kenya"},{"id":108,"title":"Kiribati"},{"id":109,"title":"Korea Democratic People\\"s Republic of"},{"id":110,"title":"Korea Republic of"},{"id":111,"title":"Kuwait"},{"id":112,"title":"Kyrgyzstan"},{"id":113,"title":"Lao People\\"s Democratic Republic"},{"id":114,"title":"Latvia"},{"id":115,"title":"Lebanon"},{"id":116,"title":"Lesotho"},{"id":117,"title":"Liberia"},{"id":118,"title":"Libyan Arab Jamahiriya"},{"id":119,"title":"Liechtenstein"},{"id":120,"title":"Lithuania"},{"id":121,"title":"Luxembourg"},{"id":122,"title":"Macau"},{"id":123,"title":"Macedonia"},{"id":124,"title":"Madagascar"},{"id":125,"title":"Malawi"},{"id":126,"title":"Malaysia"},{"id":127,"title":"Maldives"},{"id":128,"title":"Mali"},{"id":129,"title":"Malta"},{"id":130,"title":"Marshall Islands"},{"id":131,"title":"Martinique"},{"id":132,"title":"Mauritania"},{"id":133,"title":"Mauritius"},{"id":134,"title":"Mayotte"},{"id":135,"title":"Mexico"},{"id":136,"title":"Micronesia Federated States of"},{"id":137,"title":"Moldova Republic of"},{"id":138,"title":"Monaco"},{"id":139,"title":"Mongolia"},{"id":140,"title":"Montserrat"},{"id":141,"title":"Morocco"},{"id":142,"title":"Mozambique"},{"id":143,"title":"Myanmar"},{"id":144,"title":"Namibia"},{"id":145,"title":"Nauru"},{"id":146,"title":"Nepal"},{"id":147,"title":"Netherlands"},{"id":148,"title":"Netherlands Antilles"},{"id":149,"title":"New Caledonia"},{"id":150,"title":"New Zealand"},{"id":151,"title":"Nicaragua"},{"id":152,"title":"Niger"},{"id":153,"title":"Nigeria"},{"id":154,"title":"Niue"},{"id":155,"title":"Norfork Island"},{"id":156,"title":"Northern Mariana Islands"},{"id":157,"title":"Norway"},{"id":158,"title":"Oman"},{"id":159,"title":"Palau"},{"id":160,"title":"Panama"},{"id":161,"title":"Papua New Guinea"},{"id":162,"title":"Paraguay"},{"id":163,"title":"Peru"},{"id":164,"title":"Philippines"},{"id":165,"title":"Pitcairn"},{"id":166,"title":"Poland"},{"id":167,"title":"Portugal"},{"id":168,"title":"Puerto Rico"},{"id":169,"title":"Qatar"},{"id":170,"title":"Reunion"},{"id":171,"title":"Romania"},{"id":172,"title":"Russian Federation"},{"id":173,"title":"Rwanda"},{"id":174,"title":"Saint Kitts and Nevis"},{"id":175,"title":"Saint Lucia"},{"id":176,"title":"Saint Vincent and the Grenadines"},{"id":177,"title":"Samoa"},{"id":178,"title":"San Marino"},{"id":179,"title":"Sao Tome and Principe"},{"id":180,"title":"Saudi Arabia"},{"id":181,"title":"Senegal"},{"id":182,"title":"Seychelles"},{"id":183,"title":"Sierra Leone"},{"id":184,"title":"Singapore"},{"id":185,"title":"Slovakia"},{"id":186,"title":"Slovenia"},{"id":187,"title":"Solomon Islands"},{"id":188,"title":"Somalia"},{"id":189,"title":"South Africa"},{"id":190,"title":"South Georgia South Sandwich Islands"},{"id":191,"title":"Spain"},{"id":192,"title":"Sri Lanka"},{"id":193,"title":"St. Helena"},{"id":194,"title":"St. Pierre and Miquelon"},{"id":195,"title":"Suriname"},{"id":196,"title":"Svalbarn and Jan Mayen Islands"},{"id":197,"title":"Swaziland"},{"id":198,"title":"Sweden"},{"id":199,"title":"Switzerland"},{"id":200,"title":"Taiwan"},{"id":201,"title":"Tajikistan"},{"id":202,"title":"Tanzania United Republic of"},{"id":203,"title":"Thailand"},{"id":204,"title":"Togo"},{"id":205,"title":"Tokelau"},{"id":206,"title":"Tonga"},{"id":207,"title":"Trinidad and Tobago"},{"id":208,"title":"Tunisia"},{"id":209,"title":"Turkey"},{"id":210,"title":"Turkmenistan"},{"id":211,"title":"Turks and Caicos Islands"},{"id":212,"title":"Tuvalu"},{"id":213,"title":"Uganda"},{"id":214,"title":"Ukraine"},{"id":215,"title":"United Arab Emirates"},{"id":216,"title":"United Kingdom"},{"id":217,"title":"United States minor outlying islands"},{"id":218,"title":"Uruguay"},{"id":219,"title":"Uzbekistan"},{"id":220,"title":"Vanuatu"},{"id":221,"title":"Vatican City State"},{"id":222,"title":"Venezuela"},{"id":223,"title":"Vietnam"},{"id":224,"title":"Virigan Islands (British)"},{"id":225,"title":"Virgin Islands (U.S.)"},{"id":226,"title":"Wallis and Futuna Islands"},{"id":227,"title":"Western Sahara"},{"id":228,"title":"Yemen"},{"id":229,"title":"Yugoslavia"},{"id":230,"title":"Zaire"},{"id":231,"title":"Zambia"},{"id":232,"title":"Zimbabwe"}];' +
                            'window.categorys = [{"id":1,"name":"All"},{"id":2,"name":"Business & Marketing"},{"id":3,"name":"Creative"},{"id":4,"name":"Film & Music"},{"id":5,"name":"Fun & Entertainment"},{"id":6,"name":"Hobby & Home"},{"id":7,"name":"Life & Health"},{"id":8,"name":"Man"},{"id":9,"name":"Mode"},{"id":10,"name":"Engine"},{"id":11,"name":"News & Politics"},{"id":12,"name":"Sports"},{"id":13,"name":"Technology & Internet"},{"id":14,"name":"Travel & Events"},{"id":15,"name":"Woman"},{"id":16,"name":"Other"}];' +
                            '</script>' +
                            '<script src="../../public/virool/modules/youtubevideo/themes/public/assets/js/youtubevideo.js" type="text/javascript"></script>'+
                            
                        '</div>';
		cms.load('jquery.fancybox.css');
                cms.load('https://apis.google.com/js/client.js?onload=jsLoad');
		cms.load('ui/jquery.fancybox.js', function() {
			$.fancybox({
                content: text,
                
                autoDimensions: false,
                width: "65%"
                
            });
		});
		return false;
	})
		
})