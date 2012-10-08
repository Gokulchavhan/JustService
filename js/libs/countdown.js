
$(document).ready(function () {
   
	// JavaScript countdown 
    var austDay = new Date();
    austDay = new Date(austDay.getFullYear() + 1, 10, 14); //Just change this to your own date of launching
    $('#countdown').countdown({
        until: austDay
    });
	
	// Bottom contact form JavaScript Validation
    $("#newslatter_form").validate({
        meta: "validate",
        submitHandler: function (form) {
            $('#newslatter_form').hide();
            $('#newslattersucessmessage').append("<h4 class='form_thanks'>Thanks! We'll make sure you'll be the first to hear when we are live!</h4>");
            return false;
            form.submit();
        },
        /* */
        rules: {
            emailAddress: {
                required: true,
                email: true
            },
        },
        messages: {
            emailAddress: {
                required: "Please Enter Email Address",
                email: "Please Enter Valid Email Address"
            },
        },
    });
	//End
});