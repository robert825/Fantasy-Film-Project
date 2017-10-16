 	<?PHP
 		session_start();
 		$playerNames = [];
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$playerNames = $_POST['playerNames'];
			$count = count($playerNames);
			for ($i=0; $i < $count; $i++) {
				if ($playerNames[$i] == "") {
					unSet($playerNames[$i]);
				}
			}
			$_SESSION['playerNames_global'] = $playerNames;
			if (count($_SESSION['playerNames_global']) == $_SESSION['players_global']) {
				header("Location: draftLobbyPage.html");
			}
			else {
				echo "Please enter a name for all players.";
			}
		}
	?>
	
	<?PHP
			session_start();
			function addPlayers($num) 
			{
				for ($i=0; $i < $num; $i++) {
					echo '<label name = "playerLabels[]" class="playerLabel">Player ' . $i+1 . ': </label>';
					echo '<input name="playerNames[]" class="player" type="text" placeholder="enter player ' . $i+1 . 'name..." />';
				}
			}
		?>