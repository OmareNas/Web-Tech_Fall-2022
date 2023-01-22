<?php


switch($page)
{
	case "index":
		echo '<title>Home Page</title>';
		echo '<div class="backgroundColors">';
		echo '<div id="banner"><h2 align="center">Welcome to my Homepage!</h2></div>';
		//
		echo '<div class="navRowMargin row">';
			echo '<div class="navActive col-md-3">Home</div>';
			echo '<div class="navItem col-md-3"><a href ="index.php?page=school">School</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=work">Work</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=contact">Contact</a></div>';
		echo '</div>';
		break;
		
	case "school":
		echo '<title>School Page</title>';
		echo '<div class="backgroundColors">';		
		echo '<div class= "banner"><h2>Welcome to my School Page!</h2></div>';
		//
		echo '<div class="navRowMargin row">';
			echo '<div class="col-md-3 navItem"><a href ="index.php?page=index">Home</a></div>';
			echo '<div class="col-md-3 navActive">School</div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=work">Work</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=contact">Contact</a></div>';
		echo '</div>';
		break;
		
	case "work":
		echo '<title>Work Page</title>';
		echo '<div class="backgroundColors">';
		echo '<div id="banner"><h2 align="center">Welcome to my Work Page!</h2></div>';		
		//
		echo '<div>';
			echo '<div class="col-md-3 navItem"><a href ="index.php?page=index">Home</a></div>';
			echo '<div class="navItem col-md-3"><a href ="index.php?page=school">School</a></div>';
			echo '<div class="navActive col-md-3">Work</div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=contact">Contact</a></div>';
		echo '</div>';
		break;	
		
	case "contact":
		echo '<title>Contact Page</title>';
		echo '<div class="backgroundColors" style="width: 100%">';
		echo '<div class= "banner"><h2>Welcome to my Contact Page!</h2></div>';
		//
		echo '<div>';
			echo '<div class="col-md-3 navItem"><a href ="index.php?page=index">Home</a></div>';
			echo '<div class="navItem col-md-3"><a href ="index.php?page=school">School</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=work">Work</a></div>';
			echo '<div  class="col-md-3 navActive">Contact</div>';
		echo '</div>';
		break;
		
	default:
		echo '<title>Home Page</title>';
		echo '<div class="backgroundColors">';
		echo '<div id="banner"><h2 align="center">Welcome to my Homepage!</h2></div>';
		//
		echo '<div class="navRowMargin row">';
			echo '<div class="navActive col-md-3">Home</div>';
			echo '<div class="navItem col-md-3"><a href ="school.php?page=school">School</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=work">Work</a></div>';
			echo '<div class="navItem col-md-3"><a href="index.php?page=contact">Contact</a></div>';
		echo '</div>';
		break;
}
?>