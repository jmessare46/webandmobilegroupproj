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
    <video controls="controls" width="500" height="600" src="assets/videos/gunDefense.mov"></video>

    <video controls="controls" width="500" height="600" src="assets/videos/biuGee.mov"></video>

    <video controls="controls" width="500" height="600" src="assets/videos/lukDimBoonKwan.mov"></video>

    <video controls="controls" width="500" height="600" src="assets/videos/chumKiu.mov"></video>

    <video controls="controls" width="500" height="600" src="assets/videos/silNimTao.mov"></video>

    <video controls="controls" width="500" height="600" src="assets/videos/mokYanJong.mov"></video>
</div>


</body>
</html>