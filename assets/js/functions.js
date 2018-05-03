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
function showVideo(videoId, imageId, closeId){
	var video = document.getElementById(videoId);
	var image = document.getElementById(imageId);
	if(!video.style.display || video.style.display === "none"){
		video.style.display = "block";
		image.style.display = "none";
		document.getElementById(closeId).innerHTML = "Close Video<br>";
		document.getElementById(closeId).style.display = "inline-block";
		hideOthers(videoId, 6);
	}
}

/**
 * This function hides other video picture previews once another is opened.
 *
 * @param videoId
 * @param numVideos
 */
function hideOthers(videoId, numVideos){
	var video = document.getElementById(videoId);
	for(var i = 1; i <= numVideos; i++){
		var removeVideo = "video" + i;
		if(removeVideo == videoId){
			continue;
		}

		else{
			var hidePic = "vidPic" + i;
			document.getElementById(hidePic).style.display = "none";
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
function closeVideo(videoId, imageId, closeId){
	document.getElementById(videoId).style.display = "none";
	document.getElementById(closeId).innerHTML = "";
	document.getElementById(closeId).style.display = "none";
	document.getElementById(imageId).style.display = "inline-block";

	for(var i = 1; i <= 6; i++){
		var showPic = "vidPic" + i;
		document.getElementById(showPic).style.display = "inline-block";
	}
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
