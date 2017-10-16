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
			if (count($_SESSION['playerNames_global']) == $_SESSION['players_global']) {
				header("Location: draftLobbyPage.html");
			}
			else {
				echo "Please enter a name for all players.";
			}
		}
		$_SESSION['playerNames_global'] = $playerNames;
		$myJSON2 = json_encode($playerNames);
		echo $myJSON2;
	?>