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

<h1 class="title"><?php echo $page ?></h1>


<!-- Slide show of Las Vegas -->
<div id="slideshow">
    <div id="slides">
        <img src="assets/images/Las_Vegas.jpg" alt="Las Vegas" class="slides"/>

        <img src="assets/images/paris_las_vegas.jpg" alt="Paris Las Vegas" class="slides"/>

        <img src="assets/images/Nightclubs-and-Limo.jpg" alt="Night Club" class="slides"/>
        <div id="nslide" onclick="nextSlide(1)">&#8594;</div>
        <div id="bslide" onclick="nextSlide(-1)">&#8592;</div>
    </div>
</div><br>

</body>
</html>
