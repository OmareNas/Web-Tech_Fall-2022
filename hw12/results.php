<?php
echo '<style> p{color: #00DBEC}'; 
echo 'th,td {text-align: center;}';
echo 'tr:nth-child(even) {background-color: rgba(150, 212, 212, 0.4); }';	
echo 'th:nth-child(even),td:nth-child(even) {background-color: rgba(150, 212, 212, 0.4); }';
echo 'td:nth-child(even) {color: #00ff00 !important;}';
echo '.colorTh {color: #bf5700; font-size: 20px;}';
echo '.colorTd {color: #f2edeb; font-size: 16px;}';
echo '</style>';

include("functions.php");
echo '<br><h3 align="center"  style="color: #2DCE37"><br>Contact Form Data Results!</h3><br>';

$dblink=db_connect("contactData");
$sql="Select * from `user_input` where 1";
$result=$dblink->query($sql) or
	die("<p><br>Something went wrong with $sql<br>".$dblink->error."</p>");

echo '<table border="1" width="100%" bordercolor="#3f826d">';
echo '<tr>';
echo '	<th class="colorTh">Record #</th> 
		<th class="colorTh">First Name</th> 
		<th class="colorTh">Last Name</th> 
		<th class="colorTh">Email</th> 
		<th class="colorTh">Username</th> 
		<th class="colorTh">Comments</th>';
echo '</tr>';

$column= array('auto_id', 'first_name', 'last_name', 'email', 'username', 'comments');
$arrLength= count($column);

while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr>';
	/*
	echo '<td class="colorTd"">'.$data['auto_id'].'</td>'; 
	echo '<td class="colorTd">'.$data['first_name'].'</td>';
	echo '<td class="colorTd">'.$data['last_name'].'</td>';
	echo '<td class="colorTd">'.$data['email'].'</td>';
	echo '<td class="colorTd">'.$data['username'].'</td>';
	echo '<td class="colorTd">'.$data['comments'].'</td>';
	*/
	for ($index=0; $index < $arrLength; $index++){	
		if ($data[$column[$index]] == "")
			echo '<td class="colorTd">N/A</td>';
		else
			echo '<td class="colorTd">'.$data[$column[$index]].'</td>';	
	}
	echo '</tr>';
}
echo '</table>';
?>