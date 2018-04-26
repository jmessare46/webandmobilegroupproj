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

/*
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

//function to show the sash requirements when clicked on
function showSash(sashContentId){
	var sashShow = document.getElementById(sashContentId);
	if(!sashShow.style.display || sashShow.style.display === "none"){
		sashShow.style.display = "inline";
	}

	else{
		sashShow.style.display = "none";
	}
}

function showVideo(videoId, imageId, closeId){
	var video = document.getElementById(videoId);
	var image = document.getElementById(imageId);
	if(!video.style.display || video.style.display === "none"){
		video.style.display = "block";
		image.style.display = "none";
		document.getElementById(closeId).innerHTML = "Close Video<br>";
		document.getElementById(closeId).style.display = "inline";
	}
}

function closeVideo(videoId, imageId, closeId){
	document.getElementById(videoId).style.display = "none";
	document.getElementById(closeId).innerHTML = "";
	document.getElementById(closeId).style.display = "none";
	document.getElementById(imageId).style.display = "inline-block";
}
