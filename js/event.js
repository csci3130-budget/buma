/**
 * event.js
 * On mouse/keyboard events, perform specific tasks
 * Author: buma
 **/
$(document).ready( function() {
	/*	Clicking on other category, will appear the textfield to fill with the new category	*/
	$('#category').change( function() {
		var sel = $(this).val();
		if(sel == "other") {
			$('#new_category').show();
			$('#otherLabel').show();
		} else {
			$('#new_category').hide();	
			$('#otherLabel').hide();
		}
	});
	
	if ($("#add_budget_form select[name='category']").val() == "other") {
		$('#new_category').show();
		$('#otherLabel').show();
	}

	/*	Ajax for add_budget form	*/
	$('#btn_add_budget_form').click(function(){
		var form_data = $("#add_budget_form").serialize(),
			amount = $("#add_budget_form input[name='amount']").val(),
			category = $("#add_budget_form select[name='category']").val(),
			new_category = $("#add_budget_form input[name='new_category']").val(),
			message = $("#add_budget_form .alert"),
			add_category = false;
			message.hide().removeClass("alert-success");
			
			if (amount == "undefined" || amount == "") {
				message.show().html("Fill the AMOUNT field correctly.");
				message.addClass("alert-failure");
			}	
			else if (category == "undefined" || category == "") {
				message.show().html("Fill the CATEGORY field correctly.");
				message.addClass("alert-success");
			}			
			else if (category == "other" && (new_category == "undefined" || new_category == "")) {
				message.show().html("Fill the OTHER field correctly.");
				message.addClass("alert-success");
			}
			else {
				if (category == "other") add_category = true;
				alert("Category added.");
				$.ajax({
					type: "POST",
					url: "/~wegner/add_budget_post.php",
					data: form_data,
					success: function(result) {
						if (result == "Budget added.") {
							message.addClass("alert-success");
						}
						message.show().html(result);
					}
				});
			}
		});

	/* Create new wish */
	$("#my_wish").click( function() {
		$("#new_wish").show();
	});		

	$(".remove").click( function() {
		var text;
		var edit = confirm("Are you sure you want to remove this wish?");	
		if (edit === true) {
			//REMOVE
		} else {
			//CANCEL
		}	
	});


	$(".edit").click( function() {
		var text;
		var edit = confirm("Are you sure you want to remove this wish?");	
		if (edit === true) {
			//REMOVE
		} else {
			//CANCEL
		}	
	});


	$(".complete").click( function() {
		var text;
		var edit = confirm("Are you sure you want to remove this wish?");	
		if (edit === true) {
			//REMOVE
		} else {
			//CANCEL
		}	
	});
});
