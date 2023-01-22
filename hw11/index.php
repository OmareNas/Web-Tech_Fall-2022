<?php
echo '<!doctype html>';
echo '<style>';
echo '	#banner{
		background-color: #6B0C9B;
		color: #2BD84F;
		font-size: 36px;
		padding: 15px;
		/*margin: 10px;*/
		margin-top: 0px;
		margin-left: 10px;
		margin-right: 10px;
		margin-bottom: 10px;
		text-align: center;
	}';
echo '	.pMargin{
		margin-top: 20px;
		margin-left: 40px;
		margin-right: 10px;
		margin-bottom: 5px;
		font-family: "Lucida Console";
		/*color: #25BD29;*/
		color: #84c754;
}';

echo '</style>';
echo '<html>';
echo '<head>';
echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css">	';
echo '<meta charset="utf-8">';

echo '</head>';
echo '	<body>';


if (isset($_REQUEST['page']))
	$page=$_REQUEST['page'];
else
	$page="index";

include("navigation.php");

switch($page)
{
	case "index":
		include("home.php");
		break;
	case "school":
		include("school.php");
		break;
	case "work":
		include("work.php");
		break;		
	case "contact":
		include("contact.php");
		break;
	default:
		include("home.php");
		break;
}
echo '	</body>';
echo '</html>';
?>