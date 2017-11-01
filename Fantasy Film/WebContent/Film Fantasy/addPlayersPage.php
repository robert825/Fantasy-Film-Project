<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Fantasy Film League </title>
	
	<meta name="viewport">
 	<meta charset="utf-8">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>    
    <script type="text/javascript" src="index.js"></script>
    
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
	<body onload="setFocus()" >
		<div class="headerDiv">
			<a href="homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
		</div>
		<div class="div1"></div>
		<h2>Add Players: </h2>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div id="div2" class="div2" style="padding: 20px; width: 300px">
				
				<?php
					for ($i=0; $i<$_SESSION['players_global']; $i++) {
						$playerNum = $i + 1;
						echo "<label name=\"playerLabels[]\" class=\"playerLabel\">Player ".$playerNum.": </label>";
						echo "<input name=\"playerNames[]\" class=\"player\" type=\"text\" placeholder=\"enter player ".$playerNum." name...\" />";
						echo "<br/>";
					}
				?>
				</div>
				<input type = "submit" name = "submit" value = "Start Draft" class = "createLeagueButton" />
			</form>
	
	<?PHP
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
				header("Location: draftLobbyPage.php");
			}
			else {
				echo '<script language="javascript">';
				echo 'alert("Please complete empty form fields!")';
				echo '</script>';
			}
		}
		/*$myJSON = json_encode($_SESSION['playerNames_global']);*/
		/*echo $myJSON;*/
	?>
	
		<script type="text/javascript" > 
		function addPlayers(num) 
		{
			var playerList = document.getElementsByClassName("player");
			var labelList = document.getElementsByClassName("playerLabel");
			for (var i=9; i >= num; i--) {
				playerList[i].style.display = "none";
				labelList[i].style.display = "none";
			}
		}
		
		var numPlayers = "<?php echo $_SESSION['players_global']; ?>";
		addPlayers(numPlayers);
		</script>
		
	</body>
</html>