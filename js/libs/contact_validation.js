	// CONTACT FORM VALIDATION
	$(document).ready(function(){
		$("#contact_form").validate({
			meta: "validate",
			submitHandler: function (form) {
				//$('#contact_form').hide();
				$('#sucessmessage').append("<h4 class='form_thanks'>Thanks! Our Team will get in touch in next 24 hours</h4>");
				return false;
				form.submit();
			},
			/* */
			rules: {
				name: "required",
				
				lastname: "required",
				// simple rule, converted to {required:true}
				email: { // compound rule
					required: true,
					email: true
				},
				subject: {
					required: true,
				},
				comment: {
					required: true
				}
			},
			messages: {
				name: "Please enter your name.",
				lastname: "Please enter your last name.",
				email: {
					required: "Please enter email.",
					email: "Please enter valid email"
				},
				subject: "Please enter a subject.",
				comment: "Please enter a comment."
			},
		}); /*========================================*/
	});					
	