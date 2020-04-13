<?php
$page_title = 'Name Change';
include_once("initialize.php");

check_db_connection($connect);

$userQuery = update_employee();

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

echo("	<h1>UPDATE</h1>");
echo("<p>The employee update has been completed.</p>");

mysqli_close($connect);
include_once("includes/footer.php");
?>
