/**
 * event.js
 * On mouse/keyboard events, perform specific tasks
 * Author: buma
 **/
$(document).ready( function() {
	/*	Clicking on other category, will appear the textfield to fill with the new category	*/
	$('#inputCategory').change( function(){
    var sel = $(this).val();
    if(sel == "other") {
			$('#inputOtherCategory').show();
                        $('#otherLabel').show();
		} else {
			$('#inputOtherCategory').hide();		
                        $('#otherLabel').hide();
		}
	});
});

	/*	Ajax for add_budget form	*/
	jQuery('#btn_add_budget_form').click(function(){
		var form_data = jQuery("#add_budget_form").serialize(),
			amount = jQuery("#add_budget_form input[name='amount']").val(),
			category = jQuery("#add_budget_form input[name='category']").val(),
			new_category = jQuery("#add_budget_form input[name='new_category']").val(),
			message = jQuery("#add_budget_form .alert.alert-success.alert-dismissable strong");
		if (amount == "undefined" || amount == "") message.html("Fill the AMOUNT field correctly.");
		else if (category == "undefined" || category == "") message.html("Fill the CATEGORY field correctly.");
		else if (new_category == "undefined" || new_category == "") message.html("Fill the OTHER field correctly.");
		else {
			jQuery.ajax({
				type: "POST",
				url: "/~wegner/add_budget_post.php",
				data: form_data,
				success: function(result) {
					message.html(result);
				}
			});
		}
	});
});

