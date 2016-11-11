//$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/bootstrap-3.2.0/css/bootstrap.min.css"/>');
$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css"/>');
//$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/icon-fonts/material-design-2.2.0/css/material-design-iconic-font.css"/>');
//$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>');
$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap-iconpicker/icon-fonts/icomoon/css/style.css"/>');

$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-3.2.0/js/bootstrap.min.js");
$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js");
//$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-fontawesome-4.5.0-cux.js");
//$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-materialdesign-2.2.0.js");
$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/iconset/iconset-materialdesign-icomoon.js");
//$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js");



$(document).ready(function(){

	$('#location_icon').after('<button class="btn btn-default"  id="target_iconpicker" role="iconpicker" style="font-size:1.5em;"></button>');
	$.getScript("custom/resources/bootstrap-iconpicker/bootstrap-iconpicker/js/bootstrap-iconpicker.js",
		function () {
			$('#target_iconpicker').iconpicker();
			$('#target_iconpicker').iconpicker('setCols', 9);
			//$('#target_iconpicker').iconpicker('setIconset', 'materialdesign');
			$('#target_iconpicker').iconpicker('setIconset', 'materialdesign');
			$('#target_iconpicker').iconpicker('setSearch', false);
	      	//初始值
	      	$('#target_iconpicker').iconpicker('setIcon', $("#location_icon").val());
	      	$("#location_icon").hide();
	      }
	      )



	$('#target_iconpicker').on('change', function(e) { 
	    //console.log(e.icon);
	    $("#location_icon").val(e.icon);
	});

});
