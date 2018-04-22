<?php

/**
 * Kung Fu site curriculum page.
 *
 * @version 4/3/18
 * @author Ian Mackenzie
 */

$path = './';
$page = 'Curriculum';
include $path . 'assets/inc/header.php';
?>

<h1 class="title"><?php echo $page ?></h1>

<div id="curHead">
	<h2>Progression</h2>
		<p>Progression in Wing Chun is denoted through various colored sashes. Moy Don will teach all the way 
		up to Master level, the gold sash. Expectations for each sash are detailed below. Please click on each sash to display the details.</p>
</div>
	<br>

<div class="sash">
    <h2 id="whiteStripe" onclick="showSash('whiteSashContent')">White Sash</h2>
    		
    	<div id= "whiteSashContent">
    		<h3 class="subLearn">Hand Drills - Against High Straight Handstrikes</h3>
			<br>
			<ul class="sashExpectations">

			<li>Pak Sau - Slapping Hand</li>
				<li>Pak Sau with Shift</li>
				<li>Pak Da - Slapping Hand with Punch</li>
				<li>Tan Da to the Inside Gate - Palm Up Hand with Punch</li>
				<li>Tan Da to the Outside Gate</li>
				<li>Lop Da - Pull Punch</li>
				<li>Bong Sau - Wing Up Hand</li>
				<li>Bong / Lop Da - Wing Up Hand to Pull Punch</li>
				<li>Bong / Lop Da to Tan Da</li>
				<li>Wrong Way Bong Sau</li>
				<li>Wrong Way Bong Sau to Pak Da</li>
				<li>Wrong Way Bong Sau to Tan Da</li>
				<li>Pak Sau / Biu Sau</li>
				<li>Pak Sau / Biu Sau to a Tan Da Attack</li>
				<li>Pak Sau / Biu Sau to a Pak Da Attack</li>

			</ul>
		<br>
		<h3 class="subLearn">Hand Drills - Against High or Low Hands Using Double Blocks</h3>
			<br>
			<ul class="sashExpectations">

				<li>Garn Sau - Splitting Block Hand</li>
				<li>Kwan Sau - Rotating Pole Arms</li>
				<li>Garn Sau to Kwan Sau</li>

			</ul>
			<br>
		<h3 class="subLearn">Hand Drills - Against Low Strikes</h3>
			<br>
			<ul class="sashExpectations">

				<li>Gum Da Against Thrusting or Straight Low Strike - Palm Push Down and Punch</li>
				<li>Gum Da Against a Low Uppercut</li>
				<li>Garn Da Inside Gate - Splitting Hand and Punch</li>
				<li>Garn Da Outside Gate</li>
				<li>Dai Bong Sau - Low Wing Arm</li>
				<li>Sil Tim Nao - Little Idea Form - With all Translations of the Form</li>
				<li>Chi Dan Sao - Single Arm Sticking Hands</li>
				<li>Basic Self Defense Against Control Movements, Holds, and Tackling</li>
				<li>Elbow Striking Up, Down, Around, Side, Through, and Back Drill</li>

			</ul>
			<br>

		<h3 class="subLearn">Hand Drills - Against Hook Strikes</h3>
			<br>
			<ul class="sashExpectations">

				<li>Go Bong Da - High Wing Arm and Punch</li>
				<li>Ging Da - Hook Hand and Punch</li>
			</ul>
			<br>

		<h3 class="subLearn">Stances</h3>
			<br>
			<ul class="sashExpectations">

				<li>Yat Ji Kim Yeung Ma - Grabbing Goat Stance or Basic Stance</li>
				<li>Side Facing Stances Left and Right</li>
				<li>Back Horse Stances Left and Right</li>

			</ul>
			<br>
		<h3 class="subLearn">Punching</h3>
			<br>
			<ul class="sashExpectations">

				<li>Yat Ji Kuen - Center Line Fist</li>
				<li>Shifting Punch</li>
				<li>Advancing Double Punch or Combination Punching</li>

			</ul>
			<br>
		<h3 class="subLearn">Footwork</h3>
			<br>
			<ul class="sashExpectations">

				<li>Plucking Steps</li>
				<li>Circle Steps</li>
				<li>Shifting</li>
				<li>Angle Steps</li>

			</ul>
			<br>
		</div>
</div>

<div class="sash">	
<h2 id="greenStripe" onclick="showSash('greenSashContent')">Green Sash</h2>
	
	<div id="greenSashContent">
	<h3 class="subLearn">Foot and Leg Strikes</h3>
		<br>
		<ul class="sashExpectations">
	
			<li>Front Poking Kick</li>
			<li>Front Stomping Kick</li>
			<li>Front Push Kick</li>
			<li>Angled Front Kick</li>
			<li>Defensive Side Kick</li>
			<li>Offensive Side Kick</li>
			<li>Skipping In Side Kick</li>
			<li>Side Knee</li>
			<li>Front Knee</li>
			<li>Chin Kick Front</li>
			<li>Chin Kick Side</li>
			<li>Inside Foot Sweep</li>
			<li>Outside Foot Sweep</li>
			<li>Low to High Repeating Angle Front Kick</li>
			<li>Front Angle to Side Thrusting Knee Kicks</li>
	
		</ul>
		<br>
 
	<h3 class="subLearn">Closing Drills</h3>
		<br>
		<ul class="sashExpectations">
	
			<li>Pak Da</li>
			<li>Tan Da</li>
			<li>Lop Da with Circle Step</li>
			<li>Biu Jee to Skip in Side Kick</li>
			<li>Low Angle Front Kick to Knee to Pak Da</li>
			<li>Low Poking Kick to Groin to Pak Da</li>
			<li>Lop Da / Tan Lop Da Drill</li>
			<li>Focus Glove Drills</li>
			<li>Kicking Bag Drills</li>
			<li>Basic Self Defense Against Hand Striking, Combinations, and Kicks</li>
			<li>Chum Kiu - Searching the Bridge Form and Translations</li>
			<li>Beginning of Rolling and Changing of Chung Chi Sao - Double Sticking Hands</li>	
		</ul>
	</div>
</div>

<div class="sash">
<h2 id="redStripe" onclick="showSash('redSashContent')">Red Sash</h2>
	<div id = "redSashContent">
	<h3 class="subLearn">Chung Chi Sao - Attacks and Drills</h3>
		<br>
		<ul class="sashExpectations">

			<li>Pak Da</li>
			<li>Lop Da</li>
			<li>Da Or Dim</li>
			<li>Tan Da Outside</li>
			<li>Tan Da Inside</li>
			<li>Shifting Punch</li>
			<li>Garn Da</li>
			<li>Garn Sao</li>
			<li>Kwan Sao</li>
			<li>Bong Sao Press</li>
			<li>Biu Sao</li>
			<li>Jum Sao - Dropping Elbow</li>
			<li>All Strikes off of Change</li>
			<li>Pai Jarn Elbow Trap</li>
			<li>All Biu Jee Form Attacks</li>
			<li>Jut Da</li>
			<li>Performing Attack Double Took Sau Elbow Lifting Arm and Kick</li>
			<li>Performing Attack Double Lop Da Circle Step Sweep</li>
			<li>Tui Ma Footwork</li>
	       	  	<li>Basic Self Defense Against Knife Attacks</li>
	          	<li>Biu Gee - Thrusting Fingers or Hand Form and Translation</li>
	          	<li>Gert Jong</li>
	          	<li>Chi Gert Drills</li>
			
		</ul>
		<br>
	</div>
</div>

<div class="sash">	
<h2 id="brownStripe" onclick="showSash('brownSashContent')">Brown Sash - Fight Level</h2>
	<div id = "brownSashContent">
	<br>
	<p>In order to advance past this level, one must show proficiency in fighting drills, sparring, 
	and basic physical fitness. This can be waived for age, health, or training on your own time.</p>
	
	<br>
	<h3 class="subLearn">Fighting Drills</h3>
	<br>
		<ul class="sashExpectations">
		
			<li>Reflex Drills</li>
			<li>Set Sparring</li>
			<li>Continuous Action Sparring</li>
			<li>The Terminator Drill</li>
			<li>Hand and Body Conditioning</li>
			<li>Gore Sao and CQB Drills</li>
			<li>Mock Yan Jong - Wooden Dummy Man Form and Translation, which includes usage of movements in self defense</li>
			<li>Basic Self Defense Against a Gun</li>
		
		</ul>
	
	<br>
	<h3 class="subLearn">Balance and Strength Exercises Begin</h3>
	<br>
		<ul class="sashExpectations">
	
			<li>Pushups - Diamond, Shoulder Width Knuckle, and Wide Width Knuckle</li>
			<li>Balance Drills - Front, Side, Back, and Front</li>
			<li>Break Falls</li>
			<li>Shoulder Rolls - Front, Back, and Side</li>
			<li>Sit Ups and Crunches</li>
			<li>Deep Knee Bends</li>
			<li>Bag Striking</li>
			<li>Beam Kicking</li>
			
		</ul>
		<br>	
	</div>
</div>

<div class="sash">		
<h2 id="blackStripe" onclick="showSash('blackSashContent')">Black Sash - Teaching Level</h2>
	<div id="blackSashContent">
	<br>
	<p>This level is teaching level. You must be perfect in explaining the entire system up to this point.
	Anyone passing this level is considered Sifu (or teacher) of the system and can run classes or a school under a master's name and guidance.</p>
	
	<br>

	<h3 class="subLearn">Sifu Requirements</h3>
		<br>

		<ul class="sashExpectations">
		
			<li>Luk Dim Boon Kwan - 6 1/2 Point Pole Form and Translation</li>
			<li>Usage of Pole in Combative Techniques</li>
			<li>Chi Kwan or Sticking Pole</li>
			<li>Teaching Classes in School and Grading - you will be graded in how well you can explain systems.</li>
			<li>Basic Self Defense Against Club and Bat</li>
			<li>Proficiency in Complete System Teaching and Usage Up to this Point</li>
		
		</ul>
	</div>
</div>

<div class="sash">	
<h2 id="goldStripe" onclick="showSash('goldSashContent')">Gold Sash - Master Level</h2>
	<div id="goldSashContent">
	<br>
	<h3 class="subLearn">Mastered all systems, including fighting abilities. This has the following requirements:</h3>
	<br>
		<ul class="sashExpectations">
		
			<li>Baat Jaam Do - Eight Way Slashing / Cutting Knives or Swords - Form and Usage in Fighting</li>
	
			<li>Basic Self Defense Against Advanced Weaponry, such as Swinging Weapons and Distance</li>
			
			<li>Weapons, Including Dual Weapons Used in Pairs</li>
			
			<li>Continuous Sparring Against Multiple Opponents, One after Another, or the Circle of Iron</li>

			<li>Drill and Onslaught Drills</li>
		
			<li>A Full Weekend of Testing of All Types of Mental, Oral, Written, Physical, and Spiritual Challenges</li>

			<li>You will fully understand both the internal and external nature of Wing Chun</li>
			
			<li>Perfect knowledge of the art, its origin, history, lineage, explanation, and utilization of all techniques.</li>
			
			<li>Perfect mastery of yourself and the art</li>
			
			<li>One must show discipline, humility, confidence, compassion, control, and humanity</li>
			<br>	
		</ul>

		<p>Advanced physical fitness for those under forty or those over forty who are able to join by a doctor's release. This includes long distance running,
		many different sprints, sparring, drills, and other various exercises. All of these are to be done  under duress and high stress including a gauntlet
		that will test your ability to handle these kinds of situations. Defense against all weapons as well as hand to hand scenarios and fighting off multiple 
		attackers will also be tested. This is a weekend of pure hell. Those who pass will be proud to be called a master and humble enough to be simply called 
		Sifu (teacher) and understand why.</p>

	</div>
</div>
			
</body>
</html>
