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

session_start();
session_name("Login");

// Checks to see if user is logged in
if( $_SESSION['name'] != "Member" && $_SESSION['name'] != "Owner" )
{
    //header("Location: login.php");
}

echo "
    <div id='banner'>
        <p id='memberHead'>Click on a video to watch.</p>
        <a id='logout' href='logout.php'>Logout</a>
    </div>
    <h1 class='title'><?php echo ' . $page . '?></h1>
    <div id='videos'>
";

// Finds each video in the assets/videos folder
$videoDir = scandir("./assets/videos/");
$videoNames = [];

// Cleans the array to find just video names
foreach($videoDir as $vid)
{
    // Checks to see if the file is a .mov file
    if(strpos($vid, ".mov"))
    {
        array_push($videoNames, $vid);
    }
}

// Loops through all of the videos
for($i = 1; $i <= sizeof($videoNames); $i++)
{
    echo "
            <figure class='vidPic'>
		        <img src='assets/images/MoyDonLogo.jpg' class='videoPics' onclick=\"showVideo('video', 'vidPic', 'closeVid', $i)\">
    		    <figcaption class = 'vidDes'>" . explode(".mov", $videoNames[($i-1)])[0] . "</figcaption>
	        </figure>

            <div class='video'>
                    <video controls controlsList='nodownload' src='assets/videos/" . $videoNames[($i-1)] . "'></video>
            </div>
        
            <div class='closeVid' onclick=\"closeVideo('video', 'vidPic', 'closeVid', $i)\"></div>
        ";
}
?>
</div>


</body>
</html>
