/* 
* Skeleton V1.0.2
* Copyright 2011, Dave Gamache
* www.getskeleton.com
* Free to use under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
* 5/20/2011
*/	
	

$(document).ready(function() {

	/* Back to Top
	================================================== */

	function resetFunction()
	{
	$('html, body').animate({scrollTop:0}, 1500, 'easeOutQuint');

	}


	/* Fade in
	================================================== */


	$(document).ready(function() {
    		//$("body").css("display", "none");
 
    		//$("body").fadeIn(2000);
 
    		$("a.transition").click(function(event){
    		    event.preventDefault();
    		    linkLocation = this.href;
    		    $("body").fadeOut(1000, redirectPage);
    		});
 
    		function redirectPage() {
    		    window.location = linkLocation;
    		}
	});


});