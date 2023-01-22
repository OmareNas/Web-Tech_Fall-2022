
<?php
//echo '<style>'.include('assts/css/style.css').'</style>'; 
include("functions.php");

$dblink=db_connect("contactData");
$sql="Select * from `user_input` where 1";
$result=$dblink->query($sql) or
	die("<p><br>Something went wrong with $sql<br>".$dblink->error."</p>");

$column= array('auto_id', 'first_name', 'last_name', 'email', 'username', 'comments');
$arrLength= count($column);
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr>';
	for ($index=0; $index < $arrLength; $index++){	
		if ($data[$column[$index]] == "")
			echo '<td class="colorTd">N/A</td>';
		else
			echo '<td class="colorTd">'.$data[$column[$index]].'</td>';	
	}
	echo '</tr>';
}
?>
