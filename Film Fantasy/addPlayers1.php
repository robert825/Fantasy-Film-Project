 	<?php
 		include(index.css);
 		session_start();
		$numPlayers = $_SESSION['players_global'];
		echo '<form>';
		echo '<div id="div2" class="div2" style="padding: 20px; width: 300px">';
		while ($numPlayers != 0) {
			echo 'Player ' . $numPlayers . ': <input type="text" placeholder="enter player "' . $numPlayers . ' name..." />';
			$numPlayers--;
		}
		echo '</div>';
		echo '<input type = "submit" name = "submit" value = "Start Draft" class = "createLeagueButton" />';
		echo '</form>';
	?>