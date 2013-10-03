$(document).ready(function() { 

	// hide opacity
	cms.load('plugins.css');
	cms.load('forms/jquery.uniform.js', function() {
		$('.uform').css({opacity: '0'}).uniform();
	});

	// hide notification
	// $('.message').click(function() {
	// 	$(this).slideUp(300);
	// });
	cms.load('forms/jquery.chosen.min.js', function() {
		$('.chz-chosen').chosen();
	});

	// Navigation menu

	$('ul#navigation').superfish({ 
		delay:       0,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast',
		autoArrows:  true,
		dropShadows: false
	});
	
	$('ul#navigation li').hover(function(){
		$(this).addClass('sfHover2');
	},
	function(){
		$(this).removeClass('sfHover2');
	});

	// Accordion
	$("#accordion, #accordion2").accordion({ header: "h3" });

	// Tabs
	$('#tabs, #tabs2, #tabs5').tabs();

	
	//Hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); }, 
		function() { $(this).removeClass('ui-state-hover'); }
	);

	/* Tooltip */
	$('.tooltip').tooltip({
		track: true,
		delay: 0,
		showURL: false,
		showBody: " - ",
		fade: 250
	});

	// portlet
	$(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
			.find(".portlet-header")
				.addClass("ui-widget-header")
				.prepend('<span class="ui-icon ui-icon-circle-arrow-s"></span>')
				.end()
			.find(".portlet-content");

	$(".portlet-header .ui-icon").click(function() {
		$(this).toggleClass("ui-icon-circle-arrow-n");
		$(this).parents(".portlet:first").find(".portlet-content").slideToggle();
	});
});