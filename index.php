<?php
/**
 * Kung Fu site home page.
 *
 * @version 3/27/18
 * @author Joseph Messare
 */

$path = './';
$page = 'Home';
include $path . 'assets/inc/header.php';
?>
<br>

<h3>
    Do you want to invest in something that you can use as only a young person or something you can use and teach the
    rest of your life?
</h3><br>

<!-- Slide show of Martial Arts School -->
<div id="slideshow">
    <div id="slides">
        <img src="assets/images/studentpicture.jpg" alt="Students of Master Green" class="slides" id="current"/>

        <img src="assets/images/awardceremony.jpg" alt="Award Ceremony" class="slides"/>

        <img src="assets/images/interview.jpg" alt="Global Proving Ground Interview" class="slides"/>

        <img src="assets/images/traditionaltraining.jpeg" alt="Night Club" class="slides"/>

        <img src="assets/images/affiliatestudents.jpeg" alt="Night Club" class="slides"/>
        <div id="nslide" onclick="nextSlide(1)">&#8594;</div>
        <div id="bslide" onclick="nextSlide(-1)">&#8592;</div>
    </div>
</div><br><br>

<div>
    <h2>Recieve Training In: </h2>
    <ul>
        <li>Women's Self Defense</li>
        <li>Realistic Street Fighting</li>
        <li>Defense against Weapons</li>
        <li>Continuous Action Sparring</li>
        <li>Traditional Wing Chun Forms and Weapons</li>
    </ul>
</div><br>

<div onload="slideshow();">
    <h2>How Wing Chun differs from other styles:</h2>
    <p>
        Wing Chun is not sport-oriented. It is about protecting your life on the street with modern techniques; not techniques that were
        developed in an ancient society, but ones that were developed in post-WWII Hong Kong. These are specially developed to defend
        against all styles of fighting world-wide. A style that is for all ages, sexes, body types, and levels
        of physical fitness. Anyone can use 100% of the potential of the art to defend themselves on the street for their entire lifetime. You will not
        be spending thousands of dollars to learn a martial art that is meant to be performed as a sport on mats, or with rules
        such as weight classes, pads, and training to hit only select striking points. When you're young, especially as a larger
        man, you are usually not a target. When you get older and are not as physically fit or have health issues, you will
        become a target. You need a martial art that you will be able to use in its entirety for your whole life to defend
        yourself, not simply a portion of it because you are unable to execute the movements due to health or advanced age. The
        entire art of Wing Chun continued to be performed by the late Grandmaster Yip Man until a few weeks before his death from
        advanced cancer. He was still able to perform every system of fighting.
	<br>
        A fighting system you can teach young and old.
	<br>
        Healthy or unhealthy.
	<br>
        You can start learning this system at any time and use it for the rest of your life.
    </p>
</div>

</body>
</html>
