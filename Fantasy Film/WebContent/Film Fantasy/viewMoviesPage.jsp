<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Fantasy Film League</title>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body onLoad="loadMonths()">

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

<input type="submit" name="submit" value="see movies" class="createLeagueButton" onclick="loadMonths()">
</form>

<h1>Movies coming out in the next <jsp:getProperty name="movies" property="duration"  /> month(s): </h1>

<%	
String year = "2017";
for (int i=0; i<movies.getDuration(); i++) { 
		if (i > 0) {
			year = "2018";
		}
%>
		<h2 style="font-size: 20px; padding: 0%">
<% 		if (i==0) {
%>
		<span id="dec"></span> <%= year %>
<%} %>
<% 		if (i==1) {
%>
		<span id="jan"></span> <%= year %>
<%} %>
<% 		if (i==2) {
%>
		<span id="feb"></span> <%= year %>
<%} %>
<% 		if (i==3) {
%>
		<span id="mar"></span> <%= year %>
<%} %>
<% 		if (i==4) {
%>
		<span id="apr"></span> <%= year %>
<%} %>
<% 		if (i==5) {
%>
		<span id="may"></span> <%= year %>
<%} %>
<% 		if (i==6) {
%>
		<span id="jun"></span> <%= year %>
<%} %>
<% 		if (i==7) {
%>
		<span id="jul"></span> <%= year %>
<%} %>
<% 		if (i==8) {
%>
		<span id="aug"></span> <%= year %>
<%} %>
<% 		if (i==9) {
%>
		<span id="sep"></span> <%= year %>
<%} %>
<% 		if (i==10) {
%>
		<span id="oct"></span> <%= year %>
<%} %>
<% 		if (i==11) {
%>
		<span id="nov"></span> <%= year %>
<%} %>
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


<script> 
function loadMonths() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	var xmlDoc = this.responseXML;
	    	var months = this.responseText;
	    	var listMonths = months.split(" ");
	    	document.getElementById("dec").innerHTML = listMonths[0];
	    	document.getElementById("jan").innerHTML = listMonths[1];
	    	document.getElementById("feb").innerHTML = listMonths[2];
	    	document.getElementById("mar").innerHTML = listMonths[3];
	    	document.getElementById("apr").innerHTML = listMonths[4];
	    	document.getElementById("may").innerHTML = listMonths[5];
	    	document.getElementById("jun").innerHTML = listMonths[6];
	    	document.getElementById("jul").innerHTML = listMonths[7];
	    	document.getElementById("aug").innerHTML = listMonths[8];
	    	document.getElementById("sep").innerHTML = listMonths[9];
	    	document.getElementById("oct").innerHTML = listMonths[10];
	    	document.getElementById("nov").innerHTML = listMonths[11];
	    	
	    	
	    }
	  };
	  xhttp.open("GET", "movies.xml", true);
	  xhttp.send();
}	  

</script>

</body>
</html>