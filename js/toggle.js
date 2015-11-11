$(document).ready(function(){

	/* Toggle Effect */
	$(".toggle-content").hide();
	$(".toggle-button").click(function(){ 

		var div = $(this).attr("alt");
		$("#"+div).slideToggle("slow");

	});
	

});