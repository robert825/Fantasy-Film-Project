var pickNum = 1;
var currentSlot;

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
	if(i==0)
		{
		alert("Total box office revenue: \n\n" +
				"Whichever player's roster of movies totals the highest box office revenue over the course of the season wins!");
		}
	else // if(i==1)
		{
		alert("Round by round: \n\n" +
				"Earn points based on how well your movies perform against other players' movies drafted in the same round. " +
				"For instance, in a five team league, the movie with the highest box office revenue of all first round movies " +
				"earns a player 4 points, followed by 3, 2, 1, 0 for the next movies with the highest revenue. This scoring takes " +
				"place across all rounds.");
		}
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

function setPlayerName() {
	
}