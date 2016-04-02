		var imagecount =1;
		var total= 8;
 		function slide(x){
 		var img =document.getElementById('image');
 		imagecount=imagecount + x;
 		if(imagecount > total){imagecount = 1;}
 		if (imagecount<1) {imagecount = total;};
 		img.src="images/s" + imagecount+".jpg";
 		}


 	window.setInterval(function slideA(){
 		var img =document.getElementById('image');
 		imagecount=imagecount + 1;
 		if(imagecount > total){imagecount = 1;}
 		if (imagecount<1) {imagecount = total;};
 		img.src="images/s" + imagecount+".jpg";
 		},5000);
///----------------------------------------------
	var imgcount = 1;
	var imgTotal = 4;
	window.setInterval(function slide_load(){
		var	imgload = document.getElementById('img');
		imgcount=imgcount + 1;
		if(imgcount>4){imgcount=1};
		if (imgcount<1) {imgcount=imgTotal};
		imgload.src="images/car" + imgcount +".jpg";
	},7000);
//----------------------------slide service-----------------
	var imgser=1;
	var sertotal=6;
	function slideser(x){
		var imag = document.getElementById('imag');
		imgser= imgser+x;
 		if(imgser > sertotal){imgser = 1;}
 		if (imgser<1) {imgser = sertotal;};
 		imag.src="../images/ser" + imgser+".png";
	}


	window.setInterval(function slideserA(){
		var imag = document.getElementById('imag');
		imgser= imgser+1;
 		if(imgser > sertotal){imgser = 1;}
 		if (imgser<1) {imgser = sertotal;};
 		imag.src="../images/ser" + imgser+".png";
	},5000);

	//=========================slide show=======================

	var	timer;
	var slides=5;
	var timeLen=5000;
	function nextSlide() {
		clearTimeout(timer);
		var current=parseInt($("#counter").php());
		if (current<slides) {
			var nextSlide=counter+1;
		}else{
			var nextSlide=1;
		}

		// set rear image to next slide(stile not visible)
		$("#slide_back img").attr("C:/xampp1/htdocs/hotelweb/images/slide"+nextSlide+".jpg");

		//Hide fron image...
		$("#slide_font").animate({opacity:"0"},700,"linear",function(){

			//change the front image src( currently hidden)
			$("#slide_front img").attr("src","C:/xampp1/htdocs/hotelweb/images/slide"+nextSlide+".jpg")
			
			//display front image 
			$("#slide_front").css("opacity","1");
			//change jumpers
			$("jumpers li.current").removeAttr("class");
			$("jumpers#"+nextSlide).attr("class","current");
			//set time for next image
			timer=setTimeout("nextSlide()",timLen);
		}
	}
	$(document).ready(function(){

	});