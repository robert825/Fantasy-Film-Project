<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Fantasy Film League </title>
	
	<meta name="viewport">
 	<meta charset="utf-8">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
	<script type="text/javascript" src="index.js"></script>
	<div class="headerDiv">
		<a href="homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
	</div>
	<div class="div1"></div>
	
	<br/>
		<br/>
		
		<form action="http://localhost:8080/Fantasy_Film/viewLeaguePage" method="get">
			<jsp:useBean id="myBean" class="bean.draftRecapBean"></jsp:useBean>
			<table class="movieSelectBoxTable" border="1" cellspacing="0" cellpadding="5"> 
			<tr>
			<th>Round</th>
			<% 
			
				String roundsString = request.getParameter("movies");
			   	int movies = Integer.parseInt(roundsString);
			   	String playersString = request.getParameter("players");
			   	int players = Integer.parseInt(playersString);
			   	String [] playerNames = request.getParameterValues("playerNames[]");
			
				/* int players = 5;
				int movies = 5;
				String [] playerNames = {"hannah", "rob", "rachel","bob","suzie"}; */
				String [][] movieLists = {{"A", "B", "C", "D", "E"}, {"F", "G", "H", "I", "J"}, {"A", "B", "C", "D", "E"}, {"A", "B", "C", "D", "E"}, {"A", "B", "C", "D", "E"}};
					for (String s: playerNames) {
			%>
			<th><%= s %></th>
			<% } %>
			</tr>
			<%
				for (int i = 0; i<movies ; i++) {
			%>
			<tr>
			<th> <%= i+1 %>	</th>
			
			<%
				for (int j = 0; j < players; j++) {
			%>
			<td align="center"> <%= movieLists[j][i] %> </td>
			<% 
				}
			%>
			
			</tr>
			<%
				}
			%>
			
			</table>
			
			<input type="submit" name="submit" value="Take me to my league page!" class="finishButton" style="margin-left:60%">
			
		</form>
		<br />

</body>
</html>