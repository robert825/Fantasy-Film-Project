var pickNum = 1;
var currentSlot;
//var currentSlot = draftBoard.getElementsByTagName("td")[0];
//currentSlot.style.background = "blue";
function setFocus()
{
	document.forms[0].elements[0].focus();
}
function startDraft()
{
	currentSlot = document.getElementById("1");
	currentSlot.style.border = "thick solid red";
	currentSlot.innerHTML = "select movie...";
}
function qMark(i)
{
	alert("");
}
function draft(movie)
{
	var choice = document.getElementById(movie);
	currentSlot.innerHTML = choice.innerHTML;
	currentSlot.style.border = "";
	choice.style.visibility = "hidden";
	pickNum++;
	currentSlot = document.getElementById("" + pickNum);
	currentSlot.style.border = "thick solid red";
	currentSlot.innerHTML = "select movie...";
}