// Import Servlet Libraries
import javax.servlet.*;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

// Import Java Libraries
import java.io.*;
import java.util.*;
import java.lang.*;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class viewLeaguePage
 */
@WebServlet("/viewLeaguePage")
public class viewLeaguePage extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public viewLeaguePage() {
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		//response.getWriter().append("Served at: ").append(request.getContextPath());
		
		{   
			   // first, set the "content type" header of the response
			   response.setContentType ("text/html");
			   //Get the response's PrintWriter to return text to the client.
			   PrintWriter toClient = response.getWriter ();

			   String para;
			   Enumeration paraNames = request.getParameterNames ();

			   toClient.println("<?php session_start(); ?>");
			   toClient.println ("<!DOCTYPE html>");
			   toClient.println ("<html lang=\"en-us\">");
			   toClient.println ("<head>");
			   toClient.println ("<title>Fantasy Film League</title>");
			   toClient.println ("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\">");
			   toClient.println("<meta name=\"viewport\">");
			   toClient.println("<meta charset=\"utf-8\">");
			   toClient.println("<script src=\"http://code.jquery.com/jquery-3.2.1.min.js\"></script>");
			   toClient.println("<link rel=\"stylesheet\" type=\"text/css\" href=\"index.css\" />");
			   toClient.println ("</head>");

			   toClient.println ("<body>");
			   
			   toClient.println("<script type=\"text/javascript\" src=\"index.js\"></script>");
			   toClient.println("<div class=\"headerDiv\">");
			   toClient.println("<a href=\"homePage.html\"><img src=\"FantasyFilmLogo.jpg\"></a>");
			   toClient.println("</div>");
			   toClient.println("<div class=\"div1\"></div>");
			   toClient.println("<br/>");
			   toClient.println("<br/>");
			   
			   // here is where we will load in the PHP $_SESSION variables
			   String roundsString = request.getParameter("<?php echo \"$_SESSION['movies_global']\"; ?>");
			   int rounds = Integer.parseInt(roundsString);
			   String playersString = request.getParameter("<?php echo \"$_SESSION['players_global']\"; ?>");
			   int players = Integer.parseInt(playersString);
			   
			   //int rounds = 5;
			   //int players = 5;
			   
			   toClient.println("<table class=\"movieSelectBoxTable\" border=\"1\" cellspacing=\"0\" cellpadding=\"5\"> ");
			   toClient.println("<tr>");
			   toClient.println("<th></th>");
			   for(int i=1; i<=players; i++)
			   {
				   toClient.println("<th>Player " + i + "</th>");
				   toClient.println("<th></th>");
			   }
			   
			   toClient.println("</tr>");
			   toClient.println("<tr>");
			   toClient.println("<th>Round</th>");
			   
			   for(int i=1; i<=players; i++)
			   {
				   toClient.println("<th>Movie</th>");
				   toClient.println("<th>Box Office Revenue</th>");
			   }
			   
			   toClient.println("</tr>");
			   toClient.println("<tr>");
			   
			   for(int j=1; j<=rounds; j++)
			   {
				   toClient.println("<tr>");
				   toClient.println("<th>" + j + "</th>");
				   for(int i=0; i<players*2; i++)
				   {
					   toClient.println("<td align=\"center\"></td>");
				   }
				   toClient.println("</tr>");
			   }
				
			   toClient.println("<tr>");
			   toClient.println("<th>Total</th>");
			   for(int i=1; i<=players; i++)
			   {
				   toClient.println("<th>All Movies:</th>");
				   toClient.println("<td align=\"center\"></td>");
			   }
			   
			   toClient.println("</tr>");
			   toClient.println("</table>");
			   toClient.println("<br/>");
			   toClient.println("<br/>");
			   toClient.println("<br/>");
				
			   toClient.println("</body>");
			}
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
	}

}
