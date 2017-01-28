window.onload = function (){ 

	// appartition du sticky menu
	var Stickymenu = document.getElementById("Stickymenu");
	var logo = document.getElementById("logo");
	//Stickymenu.style.display="none";


	if ($(window).width() > 1160 ) {
		window.onscroll = function() {fonctionScroll()};

		function fonctionScroll() {
			    if (window.pageYOffset > 300 || document.documentElement.scrollTop > 300 || document.body.scrollTop > 300 ) {
			       //Stickymenu.style.display="block";
			       Stickymenu.style.top="0px";
			       function anima() {
			       		Stickymenu.style.marginTop ="50px";
			       		logo.style.width ="200px";
			       }
			    } 
			    else{
			    	Stickymenu.style.top="-200px";
			    }
			}	
	}

}