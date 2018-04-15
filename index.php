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
        <img src="assets/images/studentpicture.jpg" alt="Students of Master Green" class="slides"/>

        <img src="assets/images/awardceremony.jpg" alt="Award Ceremony" class="slides"/>

        <img src="assets/images/interview.jpg" alt="Global Proving Ground Interview" class="slides"/>

        <img src="assets/images/traditionaltraining.jpeg" alt="Night Club" class="slides"/>

        <img src="assets/images/affiliatestudents.jpeg" alt="Night Club" class="slides"/>
        <div id="nslide" onclick="nextSlide(1)">&#8594;</div>
        <div id="bslide" onclick="nextSlide(-1)">&#8592;</div>
    </div>
</div><br>

<div>
    <h2>Recieve Training In: </h2>
    <ul>
        <li>Women's Self Defense</li>
        <li>Realistic Street Fighting</li>
        <li>Weapons Defenses</li>
        <li>Continuous Action Sparring</li>
        <li>Traditional Wing Chun Forms and Weapons</li>
    </ul>
</div><br>

<div>
    <h2>How Wing Chun differs from other styles:</h2>
    <p>
        Not sport oriented it is about protecting your life on the street with modern techniques not technique that was
        developed in a ancient society but one that was developed in Hong Kong post WWII that was developed to defend
        against all styles of fighting world wide. A style that is for all ages, both sexes, all body types, and levels
        of physical fitness can still use 100% of the art to defend themselves on the street for there life time not
        spending $1000s of dollars to learn a Martial Art that is meant to be performed as a sport on mats or with rules
        like weight classes , pads , and training to hit only select striking points. When your young especially a big
        man you are usually not a target. When you get older and are not as physically fit or have health issues you now
        become a target. You need a martial art that you can use 100% of the system for your whole life to defend
        yourself not a portion of it because you are unable to execute the movements due to health or advanced age. The
        whole art of Wing Chun was able to be performed by late Grandmaster Yip Man a few weeks before his death from
        advanced cancer. He was still able to perform all his system of fighting.
    </p>
</div>

</body>
</html>
