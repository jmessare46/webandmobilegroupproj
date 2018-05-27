// Put all of your functions in this js file

var slideIndex = 0;     // The current slide being shown.

/*
 * Goes to the next slide
 *
 * @param num: plus or minus the slide index (should be +1 or -1)
 */
function nextSlide( num )
{
    if( slideIndex + num > document.getElementsByClassName("slides").length - 1 )
    {
        slideIndex = 0;
    }
    else if( slideIndex + num < 0 )
    {
        slideIndex = document.getElementsByClassName("slides").length - 1;
    }
    else
    {
        slideIndex += num;
    }

    slideshow();
}

/**
 * Runs the slide show on the home page.
 */
function slideshow()
{
    var slides = document.getElementsByClassName("slides");

    for( i = 0; i < slides.length; i++ )
    {
        slides[i].style.display = "none";
    }

    slides[slideIndex].style.display = "block";
}

/**
 * Shows the sash requirements when clicked on.
 *
 * @param sashContentId
 */
function showSash(sashContentId){
	var sashShow = document.getElementById(sashContentId);
	if(!sashShow.style.display || sashShow.style.display === "none"){
		sashShow.style.display = "inline";
	}

	else{
		sashShow.style.display = "none";
	}
}


/**
 * This function sets the video to appear on click and displays a close video button.
 *
 * @param videoId
 * @param imageId
 * @param closeId
 */
function showVideo(videoId, imageId, closeId, index){
	var video = document.getElementsByClassName(videoId)[index-1];
	var image = document.getElementsByClassName(imageId)[index-1];
	if(!video.style.display || video.style.display === "none"){
		video.style.display = "block";
		image.style.display = "none";
		video.style.width = "500px";
		video.style.width = "600px";
		document.getElementsByClassName(closeId)[index-1].innerHTML = "Close Video<br>";
		document.getElementsByClassName(closeId)[index-1].style.display = "inline-block";
		hideOthers(videoId, document.getElementsByClassName(videoId).length);
	}
}

/**
 * This function hides other video picture previews once another is opened.
 *
 * @param videoId
 * @param numVideos
 */
function hideOthers(videoId, numVideos){
	for(var i = 0; i < numVideos; i++){
		var removeVideo = "video" + i;
		if(removeVideo == videoId){
			continue;
		}

		else{
			var hidePic = "vidPic";
			document.getElementsByClassName(hidePic)[i].style.display = "none";
		}
	}
}

/**
 * This function closes the video, removes the close button, and brings back up the preview image.
 *
 * @param videoId
 * @param imageId
 * @param closeId
 */
function closeVideo(videoId, imageId, closeId, index){
	document.getElementsByClassName(videoId)[index-1].style.display = "none";
	document.getElementsByClassName(closeId)[index-1].innerHTML = "";
	document.getElementsByClassName(closeId)[index-1].style.display = "none";
	document.getElementsByClassName(imageId)[index-1].style.display = "inline-block";

	for(var i = 1; i <= document.getElementsByClassName(videoId).length; i++){
		var showPic = "vidPic";
		document.getElementsByClassName(showPic)[i-1].style.display = "inline-block";
	}
}

/* This function returns image on mouse out
 *
 * @param image
 * @param imageId
 *
 */
function returnImage(image, imageId){
	image.src = "assets/images/" + imageId + ".png";
}


/* Contact Page validateForm Function */

function validateForm(){
    var isValid = true;
    if(document.getElementById("name").value == ''){
        document.getElementById("name").style.borderColor = "red";
        document.getElementById("name").style.backgroundColor = "pink";
        isValid = false;
    }

    if(document.getElementById("email").value == ''){
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("email").style.backgroundColor = "pink";
        isValid = false;
    }

    if(document.getElementById("message").value == ''){
        document.getElementById("message").style.borderColor = "red";
        document.getElementById("message").style.backgroundColor = "pink";
        isValid = false;
    }
    return isValid;
}

/* End of validateForm Function */

/* Start Mobile Menu isResponsive Function */
function isResponsive(){
	var elem = document.getElementById("navBar");
	if (elem.className === "topNav"){
    	elem.className += " responsive";
	} 
	else{
    	elem.className = "topNav";
  	}
}
/* End Mobile Menu isResponsive Function */