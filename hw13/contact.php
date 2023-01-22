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




include("functions.php");
//echo '<div>TEST2</div>';
if (!(isset($_POST['submit'])))
{
	//echo '<div>TEST3</div>';
	echo '<h3 align="center"  style="color: #2DCE37"><br>Fill out my contact Form</h3>';

	if (isset($_REQUEST['msg']) && $_REQUEST['msg']=="successful")
	{
		echo '<div><p>Data entered successfully!</p></div>';
	}

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
	echo '	<textarea class="form-control" rows="3" name="comments" id="comments" 
				onBlur="checkComment(this.value,this.id)"></textarea>';
	echo '	<p class="help-block" id="commentHelp"></p>';
	echo '</div>';

	echo '	<button type="submit" name="submit" value="submit">Submit</button>';
	echo '</form>';
	
		
}			
if (isset($_POST['submit']))
{	
//	echo '<div>TEST</div>';
	$dblink=db_connect("contactData");	
	$firstName=$_REQUEST['fName'];
	$lastName=$_REQUEST['lName'];
	$email=$_REQUEST['email'];
	$username=$_REQUEST['username'];
	$comments=$_REQUEST['comments'];
	$sql="Insert into `user_input` (`first_name`,`last_name`,`email`,`comments`,`username`) values";
	$sql.=" ('$firstName','$lastName','$email','$comments','$username')";
	$dblink->query($sql) or
		die("Something went wrong with $sql".$dblink->error);
	redirect("index.php?page=contact&msg=successful");
//	echo '<div>TEST4</div>';
}

echo '<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>';
?>
<script src="assets/js/validation.js"></script>

