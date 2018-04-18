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

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/gunDefense.mov"></video>

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/biuGee.mov"></video>

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/lukDimBoonKwan.mov"></video>

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/chumKiu.mov"></video>

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/silNimTao.mov"></video>

<video controls="controls" width="800" height="600"
       name="Video Name" src="assets/videos/mokYanJong.mov"></video>

</body>
</html>