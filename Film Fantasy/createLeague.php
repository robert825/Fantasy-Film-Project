 	<?php
 	session_start();
    $players = $movies = NULL;
    $key = "";
	$name = $season = $league = NULL;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isSet($_POST['name'])) {
			$name = trim($_POST['name']);
			$_SESSION['name_global'] = trim($_POST['name']);
		}
		if (isSet($_POST['players'])) {
			$players = trim($_POST['players']);
			$_SESSION['players_global'] = trim($_POST['players']);
		}
		if (isSet($_POST['movies'])) {
			$movies = trim($_POST['movies']);
			$_SESSION['movies_global'] = trim($_POST['movies']);
		}
		if (isSet($_POST['season'])) {
			$season = trim($_POST['season']);
			$_SESSION['season_global'] = trim($_POST['season']);
		}
		if (isSet($_POST['league'])) {
			$league = trim($_POST['league']);
			$_SESSION['league_global'] = trim($_POST['league']);
		}
		
		if ($name != NULL && $players != NULL && $movies != NULL && $season != NULL && $league != NULL) {
			header("Location: addPlayersPage.html");
		}
		else {
			header("Location: createLeaguePage.html");
		}
	}
	?>