<?php
$firstName=$_POST['fName'];
$lastName=$_POST['lName'];
$email=$_POST['email'];
$username=$_POST['username'];
$comment=$_POST['comment'];

echo '<h2>Results:</h2>';
echo '<p>First Name: '.$firstName.'</p>';
echo '<p>Last Name: '.$lastName.'</p>';
echo '<p>Email: '.$email.'</p>';
echo '<p>Username: '.$username.'</p>';
echo '<p>Comment: '.$comment.'</p>';

?>