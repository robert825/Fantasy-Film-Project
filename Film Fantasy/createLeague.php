 	<?php
 	session_start();
    $players = $movies = NULL;
    $key = "";
	$name = $season = $league = NULL;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['name'])) {
			$key = $key . "Name of League, ";
		}
		else {
			$name = trim($_POST['name']);
			$_SESSION['name_global'] = trim($_POST['name']);
			
		}
		if (empty($_POST['players'])) {
			$key = $key . "Players, ";
		}
		else {
			$players = trim($_POST['players']);
			$_SESSION['players_global'] = trim($_POST['players']);
		}
		if (empty($_POST['movies'])) {
			$key = $key . "Movies per player, ";
		}
		else {
			$movies = trim($_POST['movies']);
			$_SESSION['movies_global'] = trim($_POST['movies']);
		}
		if (empty($_POST['season'])) {
			$key = $key . "Length of season, ";
		}
		else {
			$season = trim($_POST['season']);
			$_SESSION['season_global'] = trim($_POST['season']);
		}
		if (empty($_POST['league'])) {
			$key = $key . "Type of League, ";
		}
		else {
			$league = trim($_POST['league']);
			$_SESSION['league_global'] = trim($_POST['league']);
		}

		if ($name != NULL && $players != NULL && $movies != NULL && $season != NULL && $league != NULL) {
			header("Location: addPlayersPage.html");
		}
		else {
			header("Location: createLeaguePage.html");
			echo "<script type='text/javascript'>alert('Incomplete form fields! Please enter values for the following: \n' + $key);</script>";
		}
	}
	?>