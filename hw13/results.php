<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<style>';
echo 'p{color: #00DBEC}';
echo 'tr:nth-child(even) {background-color: rgba(150, 212, 212, 0.4); }';
include('assts/css/style.css');
echo '</style>';

echo '<br><h3 align="center"  style="color: #2DCE37"><br>Contact Form Data Results!</h3><br>';
echo '<table border="1" width="100%" bordercolor="#3f826d">';
echo '<tr>';
echo '	<th class="colorTh">Record #</th> 
		<th class="colorTh">First Name</th> 
		<th class="colorTh">Last Name</th> 
		<th class="colorTh">Email</th> 
		<th class="colorTh">Username</th> 
		<th class="colorTh">Comments</th>';
echo '</tr>';

echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
?>
<script>
function refresh_div() {
	$.ajax({
		type: 'post',
		url: 'https://ec2-18-221-182-52.us-east-2.compute.amazonaws.com/hw13/query.php', // url link inside for query display
		success: function(data){
			$('#results').html(data); //results is the id for tbody
		}
	});
};
setInterval (function() { refresh_div(); }, 500);
</script>