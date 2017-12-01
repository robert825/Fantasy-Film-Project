<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Fantasy Film League </title>
	
	<meta name="viewport">
 	<meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
	<body onload="startDraft()" ng-app="myApp">
		<script type="text/javascript" src="index.js"></script>
		<div class="headerDiv">
			<a href="homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
		</div>
		<div class="div1"></div>
		
		<br/>
		<br/>
		
		<div class="headerDiv" ng-controller="myController" ng-init="moviePicks=[]">
				
		<div class="movieSelectionBox">
			Movies:
			<br/>
			<br/>
			<table class="movieSelectBoxTable" border="1" cellspacing="0" cellpadding="5" width="100%"> 
				<thead>
				<tr>
					<th>Title</th>
				<?php 
				/*
				$dec2017 = array("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel", "The Disaster Artist", "Just Getting Started", "Hollow in the Land", "I, Tonya", "November Criminals", "Quest", "Ferdinand", "The Shape of Water", "Star Wars: The Last Jedi", "The Ballad of Lefty Brown", "Beyond Skyline", "Gotti", "The Greatest Showman", "Jumanji: Welcome to the Jungle", "All the Money in the World", "Downsizing", "Father Figures", "Pitch Perfect 3", "Crooked House", "Hangman", "Happy End", "Hostiles", "The Post", "Molly's Game", "Phantom Thread", "Film Stars Don't Die in Liverpool");
				$jan2018 = array("Insidious: The Last Key", "Molly's Game", "The Strange Ones", "The Commuter", "Paddington 2", "Proud Mary", "12 Strong", "Den of Thieves", "Forever My Girl", "The Leisure Seeker", "Extinction", "Maze Runner: The Death Cure", "White Boy Rick");
				$feb2018 = array("Cloverfield Movie", "Winchester: The House that Ghosts Built", "A Fantastic Woman", "The 15:17 to Paris", "Fifty Shades Freed", "Peter Rabbit", "Black Panther", "Early Man", "Samson", "Loveless", "The Party", "Annihilation", "The War with Grandpa", "Canal Street");
				$mar2018 = array("Alpha", "Death Wish", "Game Night", "Red Sparrow", "Foxtrot", "A Wrinkle in Time", "Thoroughbreds", "I Can Only Imagine", "Tomb Raider", "Action Point", "Pacific Rim: Uprising", "Sherlock Gnomes", "Isle Of Dogs", "Paul, Apostle of Christ", "Acrimony", "Midnight Sun", "Ready Player One", "Mary Magdalene");
				$apr2018 = array("Blockers", "Chappaquiddick", "A Quiet Place", "X-Men: The New Mutants", "Overboard", "Rampage", "Super Troopers 2", "Tully", "Traffik", "Truth or Dare");
				$may2018 = array("Avengers: Infinity War", "Life of the Party", "Laika Movie", "Slenderman", "A Star is Born", "Solo: A Star Wars Story");
				$jun2018 = array("Deadpool 2", "Ocean's Eight", "Pixar's The Incredibles 2", "Jurassic World: Fallen Kingdom", "I Feel Pretty", "Sicario 2: Soldado", "Tag", "Uncle Drew");
				$jul2018 = array("The Purge 4", "Ant-Man and the Wasp", "The Spy Who Dumped Me", "Hotel Transylvania 3", "The Nun", "Skyscraper", "Alita: Battle Angel", "Mamma Mia: Here We Go Again!", "Mission: Impossible 6");
				$aug2018 = array("Christopher Robin Movie", "The Equalizer 2", "The Predator", "Barbie", "Meg", "Scarface", "Captive State", "The Happytime Murders", "Cadaver", "The Little Stranger");
				$sep2018 = array("The Darkest Minds", "Goosebumps: Horrorland", "The House with a Clock in its Walls", "Robin Hood: Origins", "The Kid Who Would be King", "Night School", "Smallfoot", "Boy Erased");
				$oct2018 = array("Bad Times At The El Royale", "Venom", "First Man", "Hellfest", "The Girl in the Spider's Web", "Halloween", "Jungle Book", "Overlord");
				$nov2018 = array("Mulan", "The Nutcracker and the Four Realms", "X-Men: Dark Phoenix", "Mary, Queen of Scots", "Dr. Seuss' The Grinch", "Holmes and Watson", "Fantastic Beasts and Where to Find Them 2", "Widows", "Ralph Breaks the Internet: Wreck-It Ralph 2", "Marwencol");
				$dec2018 = array("Animated Spider-Man", "Mortal Engines", "Aquaman", "Bumblebee", "Bohemian Rhapsody", "Mary Poppins Returns");
				$months = array($dec2017, $jan2018, $feb2018, $mar2018, $apr2018, $may2018, $jun2018, $jul2018, $aug2018, $sep2018, $oct2018, $nov2018, $dec2018);
				
				
				for ($i=0; $i<$_SESSION['season']; i++) {
					$movieList.push($months[$i]);
				}
				*/
				
				$movieList = array("Movie A", "Movie B", "Movie C", "Movie D", "test");
				for($i = 0; $i < count($movieList); $i++)
				{
					echo "<tr>"; 
					echo "<td align=\"center\" class=\"available\" id=\"" .$movieList[$i]. "\" ng-click=\"draft('" .$movieList[$i]. "')\" . \"ng-model=\"" .$movieList[$i]. "\">" .$movieList[$i]. "</td>";     
				  	echo "</tr>";
				}
				
				?>
			</table>
		</div>

		<?php
		echo '<form action="http://localhost:8080/Fantasy_Film/viewLeaguePage" method="get" >';
		 echo '<div class="playerTableDiv">';
			echo '<table class="movieSelectBoxTable" border="1" cellspacing="0" cellpadding="5">'; 
				echo '<tr>';      
				  	echo '<th>Round</th>';
					
					for ($i=0; $i < $_SESSION['players_global']; $i++) {
						echo "<th class=\"players\" id=\"p".($i+1)."\">".$_SESSION["playerNames_global"][$i]."</th>";
					} 
				echo '</tr>';

				for ($i=1; $i<=$_SESSION['movies_global']; $i++) {
					echo'<tr class="rounds">';
					echo '<th>'.$i.'</th>';
					for ($j=1; $j<=$_SESSION['players_global']; $j++){
						if ($i%2 == 1) {
							$id = $j+(($i-1)*$_SESSION["players_global"]);
							echo "<td class=\"players\" align=\"center\" id=\"" . $id . "\"> {{moviePicks[". ($id - 1) ."]}} ";
							echo "</td>";
						}
						else {
							$id = ($i*$_SESSION["players_global"])-$j+1;
							echo "<td class=\"players\" align=\"center\" id=\"".$id."\"> {{moviePicks[". ($id - 1) ."]}}";
							echo "</td>";
						}
						
					}
					echo '</tr>';
				}
			echo '</table>';
		echo '</div>';	
		
		?>
		
		</div>
		
		<?php		
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
		echo '<input type="hidden" name="players" value="' . $_SESSION['players_global'] . '"/>';
		echo '<input type="hidden" name="movies" value="' . $_SESSION['movies_global'] . '"/> ';
		foreach($_SESSION['playerNames_global'] as $name) {
			echo '<input type="hidden" name="playerNames[]" value="' . $name . '"/> ';
		}		

			echo '<input type = "submit" name = "submit" value = "Finish Draft" class = "finishButton" />';
			echo '</form>';
			echo '<br />';

		?>
		
		
		 <script>
		      var myApp = angular.module('myApp', []);
		      
		      var pickNum = 1;
			  var currentSlot;
		
		      myApp.controller("myController", function($scope) {
		      		$scope.test = "Testing";
					$scope.draft = function(movie){
														
							var choice = document.getElementById(movie);
							currentSlot.style.border = "";
							choice.style.visibility = "hidden";
							pickNum++;
							currentSlot = document.getElementById("" + pickNum);
							if (currentSlot != null) {
								currentSlot.style.border = "thick solid red";
							}
							$scope.moviePicks.push(movie);		
							
					};

					
		      });
   	 </script>
		
	</body>
		
	</body>
	</html>