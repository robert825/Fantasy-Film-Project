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
		
		<div class="headerDiv" ng-controller="myController" ng-init="moviePicks = []; getMovies()" >
				
		<div class="movieSelectionBox" style="width: 25%;">
			Movies:
			<br/>
			<br/>
			<table class="movieSelectBoxTable" border="1" cellspacing="0" cellpadding="5" width="100%"> 
				<thead>
				<tr>
					<td>Title</td>
				</tr>
				</thead>
				<tbody style="width: 100%; height: 600px; overflow-y: scroll; display: block; ">
				<?php 
				
				$length = 0;
				
				if($_SESSION['season_global'] >= 1)
					$length += 32;
				if($_SESSION['season_global'] >= 2)
					$length += 12;	
				if($_SESSION['season_global'] >= 3)
					$length += 14;
				if($_SESSION['season_global'] >= 4)
					$length += 18;
				if($_SESSION['season_global'] >= 5)
					$length += 10;
				if($_SESSION['season_global'] >= 6)
					$length += 6;
				if($_SESSION['season_global'] >= 7)
					$length += 8;
				if($_SESSION['season_global'] >= 8)
					$length += 9;
				if($_SESSION['season_global'] >= 9)
					$length += 10;
				if($_SESSION['season_global'] >= 10)
					$length += 8;
				if($_SESSION['season_global'] >= 11)
					$length += 8;
				if($_SESSION['season_global'] >= 12)
					$length += 10;			
					
												
				for($i = 0; $i < $length; $i++)
				{
					echo "<tr>"; 
					echo "<td align=\"center\" class=\"available\" id='movieList[" . $i . "]' ng-click=\"draft('movieList[" . $i. "]') \"ng-model='movieList[" . $i . "]'>{{movieList[". $i . "]}}</td>";     		  	
				  	echo "</tr>";
				}
				
				?>
				</tbody>
			</table>
		</div>

		<?php
		echo '<form action="http://localhost:8080/Fantasy_Film/viewLeaguePage" method="get" >';
		 echo '<div class="playerTableDiv">';
			echo '<table class="movieSelectBoxTable" style="height: 720px;" border="1" cellspacing="0" cellpadding="5">'; 
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
		for($i=0; $i < $_SESSION['players_global']*$_SESSION['movies_global']; $i++) {
			echo'<input type="hidden" name="moviePicks[]" id="myPicks" value="" />';
		}		

			echo '<input type = "submit" name = "submit" value = "Finish Draft" class = "finishButton" />';
			echo '</form>';
			echo '<br />';

		?>
				
		 <script>
		      var myApp = angular.module('myApp', []);
		      
		      var pickNum = 1;
			  var currentSlot;	  
			  
		      myApp.controller("myController", function($scope, $http) {
					$scope.draft = function(movie){
														
							var choice = document.getElementById(movie);
							currentSlot.style.border = "";
							$scope.moviePicks.push(choice.innerHTML);
							choice.remove();
							pickNum++;
							currentSlot = document.getElementById("" + pickNum);
							if (currentSlot != null) {
								currentSlot.style.border = "thick solid red";
							}
								
							
							var myPicks = document.getElementsByName("moviePicks[]");
							for(var i=0; i<myPicks.length; i++) {
								var pick = myPicks[i];
							  	pick.value = $scope.moviePicks[i];
							}	
							
					};
					

					
					var onSuccess = function (data, status, headers, config) 
			         {
			            $scope.movieListString = data;
			            $scope.movieList = $scope.movieListString.split("#");
			         };
			
			         var onError = function (data, status, headers, config) 
			         {
			            $scope.error = status;
			         }
			         				
					$scope.getMovies = function() {
						var promise = $http.get("http://localhost/CS4640/CS4640-Project/Fantasy%20Film/WebContent/Film%20Fantasy/movies.php");
						promise.success(onSuccess);
						promise.error(onError);						
					}				
		      });
   	 </script>
		
	</body>
		
	</body>
	</html>