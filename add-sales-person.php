<?php
$page_title = 'Raises';
include_once("initialize.php");

check_db_connection($connect);

$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$userQuery = "INSERT INTO personnel VALUES ('$empID', '$firstName', '$lastName', 'sales', '8.25')"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

echo("	<h1>ADD A NEW PERSONNEL RECORD</h1>");
echo("<p>The following record was added to the personnel table:</p>");
echo("<table border='0'>
		<tr><td>EMPLOYEE ID</td><td>$empID</td></tr>
		<tr><td>FIRST NAME</td><td>$firstName</td></tr>
		<tr><td>LAST NAME</td><td>$lastName</td></tr>		
		<tr><td>JOB TITLE</td><td>sales</td></tr>
		<tr><td>HOURLY WAGE</td><td>8.25</td></tr>
		</table>");

mysqli_close($connect);
include_once("includes/footer.php");
?>
