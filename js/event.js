/**
 * event.js
 * On mouse/keyboard events, perform specific tasks
 * Author: buma
 **/
$(document).ready( function() {
 
	$('#inputCategory').change( function(){
    var sel = $(this).val();
    if(sel == "other") {
			$('#inputOtherCategory').show();
		} else {
			$('#inputOtherCategory').hide();		
		}
	});
	
});