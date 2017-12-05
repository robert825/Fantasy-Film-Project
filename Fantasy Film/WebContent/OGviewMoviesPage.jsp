<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Fantasy Film League</title>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>

<div class="headerDiv">
	<a href="http://localhost/CS4640/CS4640-Project/Fantasy%20Film/WebContent/Film%20Fantasy/homePage.html"><img src="images\FantasyFilmLogo.jpg"></a>
</div>
<div class="div1"></div>

<br/>
<br/>


<form method="post" action="http://localhost:8080/Fantasy_Film/Film%20Fantasy/viewMoviesPage.jsp">

<div class="div2" style="text-align:center; padding: 30px">
See movies coming out in the next: <select name="duration">
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
	<option value="11">11</option>
	<option value="12">12</option>
</select> month(s)
<br/>

</div>

<jsp:useBean id="movies" class="beans.movieBean" scope="page">
	<jsp:setProperty name="movies" property="duration" ></jsp:setProperty> 
</jsp:useBean>

<input type="submit" name="submit" value="see movies" class="createLeagueButton">
</form>

<h1>Movies coming out in the next <jsp:getProperty name="movies" property="duration"  /> month(s): </h1>

<%	String[] months = {"December 2017", "January 2018", "February 2018", "March 2018", "April 2018", "May 2018", "June 2018", "July 2018", "August 2018", "September 2018", "October 2018", "November 2018"};
	for (int i=0; i<movies.getDuration(); i++) { %>
		<h2 style="font-size: 20px; padding: 0%">
		<%= months[i] %>
		</h2>
		<jsp:getProperty name="movies" property="viewedMovies"  /> <br/>
<%
}
	%>
	
	<br/>
	<br/>
	<br/>
	<br/>
	
	
<!--<jsp:getProperty name="movies" property="movies"  />-->


</body>
</html>