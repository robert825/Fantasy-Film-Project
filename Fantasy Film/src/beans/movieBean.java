package beans;
import java.util.*;

public class movieBean {

	private int duration = 1;
	private String viewedMovies = "";
	private int count = -1;
	private ArrayList<ArrayList<String>> movies = new ArrayList<ArrayList<String>>();
	
	ArrayList<String> dec2017 = new ArrayList<String>(Arrays.asList("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel", "The Disaster Artist", "Just Getting Started", "Hollow in the Land", "I, Tonya", "November Criminals", "Quest", "Ferdinand", "The Shape of Water", "Star Wars: The Last Jedi", "The Ballad of Lefty Brown", "Beyond Skyline", "Gotti", "The Greatest Showman", "Jumanji: Welcome to the Jungle", "All the Money in the World", "Downsizing", "Father Figures", "Pitch Perfect 3", "Crooked House", "Hangman", "Happy End", "Hostiles", "The Post", "Molly's Game", "Phantom Thread", "Film Stars Don't Die in Liverpool"));
	ArrayList<String> jan2018 = new ArrayList<String>(Arrays.asList("Insidious: The Last Key", "Molly's Game", "The Strange Ones", "The Commuter", "Paddington 2", "Proud Mary", "12 Strong", "Den of Thieves", "Forever My Girl", "The Leisure Seeker", "Extinction", "Maze Runner: The Death Cure", "White Boy Rick"));
	ArrayList<String> feb2018 = new ArrayList<String>(Arrays.asList("Cloverfield Movie", "Winchester: The House that Ghosts Built", "A Fantastic Woman", "The 15:17 to Paris", "Fifty Shades Freed", "Peter Rabbit", "Black Panther", "Early Man", "Samson", "Loveless", "The Party", "Annihilation", "The War with Grandpa", "Canal Street"));
	ArrayList<String> mar2018 = new ArrayList<String>(Arrays.asList("Alpha", "Death Wish", "Game Night", "Red Sparrow", "Foxtrot", "A Wrinkle in Time", "Thoroughbreds", "I Can Only Imagine", "Tomb Raider", "Action Point", "Pacific Rim: Uprising", "Sherlock Gnomes", "Isle Of Dogs", "Paul, Apostle of Christ", "Acrimony", "Midnight Sun", "Ready Player One", "Mary Magdalene"));
	ArrayList<String> apr2018 = new ArrayList<String>(Arrays.asList("Blockers", "Chappaquiddick", "A Quiet Place", "X-Men: The New Mutants", "Overboard", "Rampage", "Super Troopers 2", "Tully", "Traffik", "Truth or Dare"));
	ArrayList<String> may2018 = new ArrayList<String>(Arrays.asList("Avengers: Infinity War", "Life of the Party", "Laika Movie", "Slenderman", "A Star is Born", "Solo: A Star Wars Story"));
	ArrayList<String> jun2018 = new ArrayList<String>(Arrays.asList("Deadpool 2", "Ocean's Eight", "Pixar's The Incredibles 2", "Jurassic World: Fallen Kingdom", "I Feel Pretty", "Sicario 2: Soldado", "Tag", "Uncle Drew"));
	ArrayList<String> jul2018 = new ArrayList<String>(Arrays.asList("The Purge 4", "Ant-Man and the Wasp", "The Spy Who Dumped Me", "Hotel Transylvania 3", "The Nun", "Skyscraper", "Alita: Battle Angel", "Mamma Mia: Here We Go Again!", "Mission: Impossible 6"));
	ArrayList<String> aug2018 = new ArrayList<String>(Arrays.asList("Christopher Robin Movie", "The Equalizer 2", "The Predator", "Barbie", "Meg", "Scarface", "Captive State", "The Happytime Murders", "Cadaver", "The Little Stranger"));

	ArrayList<String> sep2018 = new ArrayList<String>(Arrays.asList("The Darkest Minds", "Goosebumps: Horrorland", "The House with a Clock in its Walls", "Robin Hood: Origins", "The Kid Who Would be King", "Night School", "Smallfoot", "Boy Erased"));

	ArrayList<String> oct2018 = new ArrayList<String>(Arrays.asList("Bad Times At The El Royale", "Venom", "First Man", "Hellfest", "The Girl in the Spider's Web", "Halloween", "Jungle Book", "Overlord"));

	ArrayList<String> nov2018 = new ArrayList<String>(Arrays.asList("Mulan", "The Nutcracker and the Four Realms", "X-Men: Dark Phoenix", "Mary, Queen of Scots", "Dr. Seuss' The Grinch", "Holmes and Watson", "Fantastic Beasts and Where to Find Them 2", "Widows", "Ralph Breaks the Internet: Wreck-It Ralph 2", "Marwencol"));

	ArrayList<String> dec2018 = new ArrayList<String>(Arrays.asList("Animated Spider-Man", "Mortal Engines", "Aquaman", "Bumblebee", "Bohemian Rhapsody", "Mary Poppins Returns")); 
	
	
	
	public movieBean() {
		movies.add(dec2017);
		movies.add(jan2018);
		movies.add(feb2018);
		movies.add(mar2018);
		movies.add(apr2018);
		movies.add(may2018);
		movies.add(jun2018);
		movies.add(jul2018);
		movies.add(aug2018);
		movies.add(sep2018);
		movies.add(oct2018);
		movies.add(nov2018);
		movies.add(dec2018);
	}
	
	public ArrayList<ArrayList<String>> getMovies() {
		return movies;
	}


	public int getDuration() {
		return duration;
	}

	public void setDuration(int duration) {
		this.duration = duration;
	}
	
	public String getviewedMovies() {
		this.count++;
		this.viewedMovies = "";
		ArrayList<String> myMovies = movies.get(this.count);
		for (String s : myMovies) {
			if (s != myMovies.get(myMovies.size() - 1)) {
				viewedMovies += (s + ", ");
			}
			else viewedMovies += (s);
		}
		
		return viewedMovies;
	}
	
	
}
