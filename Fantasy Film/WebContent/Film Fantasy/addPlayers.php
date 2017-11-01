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
				header("Location: addPlayersPage=incomplete.html");
			}
		}
		$myJSON = json_encode($_SESSION['playerNames_global']);
		echo $myJSON;
	?>