<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Fantasy Film League </title>
	
	<meta name="viewport">
 	<meta charset="utf-8">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
	<body onload="startDraft()">
		<script type="text/javascript" src="index.js"></script>
		<div class="headerDiv">
			<a href="homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
		</div>
		<div class="div1"></div>
		
		<br/>
		<br/>
		
		<div class="headerDiv">
		<div class="movieSelectionBox">
			<form action="web-component" method="post"> Search Movie: <input type="text" placeholder="search..." /></form>
			Filter By:
			<select name="Filter By"> 
				<option value="Producer">Production Company</option>
				<option value="Release Date">Release Date</option> 
				<option value="Type of Movie">Type of Movie</option> 
			</select>
			<br/>
			Movies:
			<br/>
			<br/>
			<table class="movieSelectBoxTable" border="1" cellspacing="0" cellpadding="5" width="100%"> 
				<thead>
				<tr>
					<th>Title</th>
				<?php 
				$movieList = array("Movie A", "Movie B", "Movie C", "Movie D", "Movie E", "Movie F", "Movie G", "Movie H", "Movie I", "Movie J", "Movie K", "Movie L", "Movie M", "Movie N");
				for($i = 0; $i < count($movieList); $i++)
				{
					echo "<tr>"; 
					echo "<td align=\"center\" class=\"available\" id=\"" .$movieList[$i]. "\" onclick=\"draft('" .$movieList[$i]. "')\">" .$movieList[$i]. "</td>";     
				  	echo "</tr>";
				}
				
				?>
			</table>
		</div>

		<?php
		echo '<form action="http://localhost:8080/Fantasy_Film/Film%20Fantasy/draftRecap.jsp" method="get">';
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
							echo "<td class=\"players\" align=\"center\" id=\"".$id."\">";
							echo "</td>";
						}
						else {
							$id = ($i*$_SESSION["players_global"])-$j+1;
							echo "<td class=\"players\" align=\"center\" id=\"".$id."\">";
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
		
	</body>
		
	</body>
	</html>