/*
Creating an HTML5 enhanced responsive-ready contact form, with custom javascript feature detection
www.toddmotto.com
*/
(function() {

	// Create input element for testing
	var inputs = document.createElement('input');
	
	// Create the supports object
	var supports = {};
	
	supports.autofocus   = 'autofocus' in inputs;
	supports.required    = 'required' in inputs;
	supports.placeholder = 'placeholder' in inputs;

	// Fallback for autofocus attribute
	if(!supports.autofocus) {
		
	}
	
	// Fallback for required attribute
	if(!supports.required) {
		
	}

	// Fallback for placeholder attribute
	if(!supports.placeholder) {
		
	}
	
	$( "#effect" ).hide();
	
})();


//jQuery.ajax example

$(function(){

 function callback() {
    setTimeout(function() {
        $( "#effect:visible" ).removeAttr( "style" ).fadeOut();
    }, 3000 );
  };
    var options = {};
    $("#contact-form").submit(function(e){    
    e.preventDefault(); 
        $.post("sendMail.php", $("#contact-form").serialize(),
        function(data){
            if(data.email_check === 'NOK'){ 
                $("#msgTitle").html("Message not sent!");
                $("#msgBody").html("<strong>Sorry, your message has not been sent! <br/> Please try again.<strong>");
                 $( "#effect").show("clip", options, 500, callback );
            } else {
                $("#msgTitle").html("Message sent!");
                $("#msgBody").html("<strong>"+data.name + "<br/> Thank you for your message!<strong>");
                $( "#effect").show("clip", options, 500, callback );
                $("#contact-form")[0].reset(); 
            }
        }, "json");
        
    });
});
