<?php

/**
 * Kung Fu site media page.
 *
 * @version 3/29/18
 * @author Joseph Messare
 */

$path = './';
$page = 'Members Page';
include $path . 'assets/inc/header.php';
?>

<a id="logout" href="logout.php">Logout</a>
<h1 class="title"><?php echo $page ?></h1>
<div id="videos">
	
	<figure id = "vidPic1">
		<img src = "assets/images/vid1.jpg" onclick = "showVideo('video1', 'vidPic1', 'closeVid1')">
    		<figcaption class = "vidDes">Gun Defense Demonstration</figcaption>
	</figure>

	<div id = "video1">
	    	<video controls="controls" width="500" height="600" src="assets/videos/gunDefense.mov"></video>
    	</div>

	<div id = "closeVid1" onclick = "closeVideo('video1', 'vidPic1', 'closeVid1')"></div>

	<figure id = "vidPic2">
		<img src = "assets/images/vid2.jpg" onclick = "showVideo('video2', 'vidPic2', 'closeVid2')">
		<figcaption class = "vidDes">Biu Gee Demonstration</figcaption>
	</figure>

    	<div id = "video2">
	    	<video controls="controls" width="500" height="600" src="assets/videos/biuGee.mov"></video>
    	</div>

	<div id = "closeVid2" onclick = "closeVideo('video2', 'vidPic2', 'closeVid2')"></div>

	<figure id = "vidPic3">
		<img src = "assets/images/vid3.jpg" onclick = "showVideo('video3', 'vidPic3', 'closeVid3')">
		<figcaption class = "vidDes">Luk Dim Boon Kwan Demonstration</figcaption>
	</figure>

    	<div id = "video3">
	    	<video controls="controls" width="500" height="600" src="assets/videos/lukDimBoonKwan.mov"></video>
    	</div>

	<div id = "closeVid3" onclick = "closeVideo('video3', 'vidPic3', 'closeVid3')"></div>

	<figure id = "vidPic4">
		<img src = "assets/images/vid4.jpg" onclick = "showVideo('video4', 'vidPic4', 'closeVid4')">
		<figcaption class = "vidDes">Chum Kiu Demonstration</figcaption>
	</figure>

    	<div id = "video4">
	    	<video controls="controls" width="500" height="600" src="assets/videos/chumKiu.mov"></video>
    	</div>

	<div id = "closeVid4" onclick = "closeVideo('video4', 'vidPic4', 'closeVid4')"></div>

	<figure id = "vidPic5">
		<img src = "assets/images/vid5.jpg" onclick = "showVideo('video5', 'vidPic5', 'closeVid5')">
		<figcaption class = "vidDes">Sil Nim Tao Demonstration</figcaption>
	</figure>

    	<div id = "video5">
	    	<video controls="controls" width="500" height="600" src="assets/videos/silNimTao.mov"></video>
	</div>

	<div id = "closeVid5" onclick = "closeVideo('video5', 'vidPic5', 'closeVid5')"></div>

	<figure id = "vidPic6">
		<img src = "assets/images/vid6.jpg" onclick = "showVideo('video6', 'vidPic6', 'closevid6')">
		<figcaption class = "vidDes">Mok Yan Jong Demonstration</figcaption>
	</figure>

	<div id = "video6">
		<video controls="controls" width="500" height="600" src="assets/videos/mokYanJong.mov"></video>
	</div>

	<div id = "closeVid6" onclick = "closeVideo('video6', 'vidPic6', 'closeVid6')"></div>
</div>


</body>
</html>
