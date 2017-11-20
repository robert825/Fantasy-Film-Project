package beans;
import java.util.*;

public class movieBean {

	private int duration = 1;
	int curr = -1;
	ArrayList<ArrayList<String>> movies = new ArrayList<ArrayList<String>>();
	ArrayList<String> month = new ArrayList<String>(Arrays.asList("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel"));
	
	ArrayList<String> dec2017 = new ArrayList<String>(Arrays.asList("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel"));
	ArrayList<String> jan2018 = new ArrayList<String>(Arrays.asList("TEST", "24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel"));
	ArrayList<String> feb2018 = new ArrayList<String>(Arrays.asList("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel"));
	ArrayList<String> mar2018 = new ArrayList<String>(Arrays.asList("24 Hours to Live", "The Disaster Artist", "Gangster Land", "Love Beats Rhymes", "The Other Side of Hope", "The Shape of Water", "Tribes of Palos Verdes", "Wonder Wheel"));

	
	
	public movieBean() {
		movies.add(dec2017);
		movies.add(jan2018);
		movies.add(feb2018);
		movies.add(mar2018);
	}
	
	public ArrayList<ArrayList<String>> getMovies() {
		
		ArrayList<ArrayList<String>> returnMovies = new ArrayList<ArrayList<String>>();
		
		for (int i=0; i<this.duration; i++ ) {
			returnMovies.add(movies.get(i));
		}
		
		return returnMovies;
	}
	
	public ArrayList<String> getMonth() {
		curr++;
		return movies.get(curr);
		
	}

	public int getDuration() {
		return duration;
	}

	public void setDuration(int duration) {
		this.duration = duration;
	}
	
	/*
	 * 	public String getMonth() {
		curr++;
		ArrayList<String> currList = this.movies.get(0);
		for(String s: currList)
		{
			this.month += (s + ", ");
		}
		this.month = this.month.substring(0,  this.month.length());
		return this.month;
	}
	 * 
	 */
	
	
}
