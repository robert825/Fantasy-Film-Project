 	<?php
 		start_session();
 		$players = ();
 		$numPlayers = $_SESSION['players_global'];
 		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 			while (numPlayers > 0) {
	 			if (isSet($_POST['name'])) {
					$players[] = trim($_POST['name']);
					$_SESSION['players_global'] = $players[];
				}
				numPlayers--;
			}
			if (count($players) == $_SESSION['players_global']) {
				header("Location: draftLobbyPage.html");
			}
			else {
			header("Location: addPlayersPage.html");
		}
 		
	?>