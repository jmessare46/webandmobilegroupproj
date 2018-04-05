<?php
/**
 * Kung Fu site about us page.
 *
 * @version 3/29/18
 * @author Joseph Messare
 */

$path = './';
$page = 'About Us';
include $path . 'assets/inc/header.php';
?>

<h1 class="title"><?php echo $page ?></h1>

<p>
<!-- Notes For Omar -->
    Page content That's needed </br>
<!-- this page should contain the following -->	
	• About Us</br>
•	Instructor Biographies</br>
•	School’s Philosophy</br>
•	Class Times and Schedules</br>
•	Brief summary of what the classes are like</br>
</p>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />

<style>
/* CSS for About US Page */
/*Timelines CSS starts here!! */

* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
/*Timelines CSS Ends here!! */

/*CSS for About Us page Ends here */
</style>
</head>
<body>
 <h1>School’s Philosophy</h1>
 <p>jjkahdkfjha sdjkfadsjfhasdkjfkkkakjdfha sdkhadsfjahdklfjasdkfjhds jkdhfkjhnk djkfhkjhak j,hmd fkjhakdjhfk jhs udiykhfkb kdhfhkakdhfjdjfjjdfhak djjdh fa
 dfjkadfhk hakmjnsdjfh akjhdfk jhkjjehjbfbbankdjfhkjahkdkjfkjkjdjkjkajkdhfkajdfhou;eppqiewhrojsdnksdjfp aoujueou rhaugdojfhjjkhagdofheoina doufyhnoieyhrfndlhfoiwhfoidfhodfa
 diufjhodjfhnfgofhgpfgdfiogirriiriririr sofhfnolwuhdnnfgnlay aodhgfboieiwhsdfodsoyfgsldfkkfjuweoflsdfghlksdfgjpaghosdfujujwpiof prrfopwrrhfojwrfyndnfowhrejrighlksdfyuiweij
 
 Kung Fu is great you should learn it - Omar </p>
 
 <h1>Kung Fu Timeline </h1>
<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Omar was born</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Joe was born</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2015</h2>
      <p>Rachel was born</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2012</h2>
      <p>brook was born</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <p>Ian was born</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>Kenan was born</p>
    </div>
  </div>
</div>

<!-- this is an example of what instructors part would be! -->
 <!-- Our Instructors -->
        <div class="square">
          <h2 class="my-4">Our Instructors</h2>
        </div>
        
		<div class="square">
          <img class="instuctorImg" src="assets/images/imageExample.JPG" alt="">
          <h3>Joseph Messare
		  <small>(Job Title)</small>
		  </h3>
          <p>Little bit about the instructor</p>
        </div>
		
        <div class="square">
         <img class="instuctorImg" src="assets/images/imageExample.JPG" alt="">
          <h3>John Smith
		  <small>(Job Title)</small>
		  </h3>
		  
          <p>Little bit about the instructor</p>
        </div>
</body>
</html>