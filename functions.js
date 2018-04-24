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

//
function validateNewUser()
{
    var pass = false;

    if(document.getElementById("logout")[0].value == "" || document.getElementById("logout")[0].value == null)
    {
        document.getElementById("logout")[0].display.backgroundColor = "red";
    }

    return pass;
}