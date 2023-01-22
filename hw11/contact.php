<?php
echo '<style>';
echo '
	label
	{
		color: #15EA25;
	}
	p
	{
		color: #00DBEC;
	}
	h2
	{
		color: #2BD84F;
	}
	';
echo '</style>';

echo '	<div class="clearFloat"></div>';

?>

<?php
	
if (!(isset($_POST['submit'])))
{

echo '<h3 align="center"  style="color: #2DCE37"><br>Fill out my contact Form</h3>';
	
echo '<form method="POST" action="">';
		
echo '<div class="form-group">';
echo '	<label>First Name:</label>';
echo '	<input class="form-control" type="text" name="fName" id="fName" placeholder="John" 		 
			onBlur="checkName(this.value,this.id)">';
echo '	<p class="help-block" id="fNameHelp"></p>';		
echo '</div>';
		
echo '<div class="form-group">';
echo '	<label>Last Name:</label>';
echo '	<input class="form-control" type="text" name="lName" id="lName" placeholder="Doe"
			onBlur="checkName(this.value,this.id)">';
echo '	<p class="help-block" id="lNameHelp"></p>';
echo '</div>';
	
echo '<div class="form-group">';
echo '	<label>Email:</label>';
echo '	<input class="form-control" type="text" name="email" id="email" placeholder="john.Doe@example.com" 
			onBlur="checkEmail(this.value,this.id)">';
echo '	<p class="help-block" id="emailHelp"></p>';
echo '</div>';	
	
echo '<div class="form-group">';
echo '	<label>Username:</label>';
echo '	<input class="form-control" type="text" name="username" id="username" placeholder="JohnDoe01" 
			onBlur="checkUser(this.value,this.id)">';
echo '	<p class="help-block" id="usernameHelp"></p>';
echo '</div>';
	
echo '<div class="form-group">';
echo '	<label>Comment:</label>';
echo '	<textarea class="form-control" rows="3" name="comment" id="comment" 
			onBlur="checkComment(this.value,this.id)"></textarea>';
echo '	<p class="help-block" id="commentHelp"></p>';
echo '</div>';
	
echo '	<button type="submit" name="submit" value="submit">Submit</button>';
echo '</form>';
	
		

}			
if (isset($_POST['submit']))
{		
	$firstName=$_REQUEST['fName'];
	$lastName=$_REQUEST['lName'];
	$email=$_REQUEST['email'];
	$username=$_REQUEST['username'];
	$comment=$_REQUEST['comment'];

	echo '<h2>Results:</h2>';
	echo '<p>First Name: '.$firstName.'</p>';
	echo '<p>Last Name: '.$lastName.'</p>';
	echo '<p>Email: '.$email.'</p>';
	echo '<p>Username: '.$username.'</p>';
	echo '<p>Comment: '.$comment.'</p>';
}
echo '<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>';
?>
<script src="assets/js/validation.js"></script>

