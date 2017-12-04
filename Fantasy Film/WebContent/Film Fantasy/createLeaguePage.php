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
	<body onload="setFocus()">
		<script type="text/javascript" src="index.js"></script>
		<div class="headerDiv">
			<a href="homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
		</div>
		<div class="div1"></div>
		<h2>Set up your league: </h2>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
		<div class="div2" style="padding: 20px; width: 450px;">
			<table>
				<tr><td>Name of League:</td><td> <input name="name" type="text" placeholder="enter league name..." /></td><tr>
		<tr><td>Players:</td>
			<td><select name="players"> 
				<!-- <option value=""></option>  -->
				<option value="2">2</option> 
				<option value="3">3</option> 
				<option value="4">4</option> 
				<option value="5">5</option> 
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select></td></tr>
		<tr><td>Movies per Player:</td>
			<td><select name="movies"> 
				<!-- <option value=""></option>  -->
				<option value="1">1</option>
				<option value="2">2</option> 
				<option value="3">3</option> 
				<option value="4">4</option> 
				<option value="5">5</option> 
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select></td></tr>
		<tr><td>Length of Season:</td>
			<td><select name="season"> 
				<!-- <option value=""></option>  -->
				<option value="1 month">1 month</option>
				<option value="2 months">2 months</option> 
				<option value="3 months">3 months</option> 
				<option value="4 months">4 months</option> 
				<option value="5 months">5 months</option> 
				<option value="6 months">6 months</option>
				<option value="7 months">7 months</option>
				<option value="8 months">8 months</option>
				<option value="9 months">9 months</option>
				<option value="10 months">10 months</option>
				<option value="11 months">11 months</option>
				<option value="12 months">12 months</option>
			</select></td></tr>
			<tr><td>Type of League:</td> 
				<td><input type="radio" name="league" value="Total box office revenue" checked="checked">Total box office revenue</input>
				<button type="button" class="questionMarkButton" id="more" onclick="qMark(0)"> ? </button>
				<br />
				<input type="radio" name="league" value="Round by round">Round by round</input>
				<button type="button" class="questionMarkButton" id="more" onclick="qMark(1)"> ? </button></td></tr>
				</table>
		</div>
  			<input type = "submit" name = "submit" value = "Create League" class = "createLeagueButton" />
 		</form> 
 		 		
 		<?PHP
			
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isSet($_POST['name'])) {
			$_SESSION['name_global'] = trim($_POST['name']);
		}
		if (isSet($_POST['players'])) {
			$_SESSION['players_global'] = trim($_POST['players']);
		}
		if (isSet($_POST['movies'])) {
			$_SESSION['movies_global'] = trim($_POST['movies']);
		}
		if (isSet($_POST['season'])) {
			$_SESSION['season_global'] = trim($_POST['season']);
		}
		if (isSet($_POST['league'])) {
			$_SESSION['league_global'] = trim($_POST['league']);
		}
		
		if ($_SESSION['name_global'] != NULL && 
			$_SESSION['players_global'] != NULL && 
			$_SESSION['movies_global'] != NULL && 
			$_SESSION['season_global'] != NULL)
		{	
			header("Location: addPlayersPage.php");
		}
		else {
			echo '<script language="javascript">';
			echo 'alert("Please complete empty form fields!")';
			echo '</script>';
		}
	}
		$_SESSION['league_details'] = array($_SESSION['name_global'], $_SESSION['players_global'], $_SESSION['movies_global'], $_SESSION['season_global'], $_SESSION['league_global']);
		/*$myJSON = json_encode($_SESSION['league_details']);*/
		/*echo $myJSON;*/
	?>
	
	</body>
</html>