<?php
$page_title = 'Wage Report';
include_once("initialize.php");

check_db_connection($connect);

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

$userQuery = "SELECT empID FROM personnel WHERE hourlyWage >= '$hourlyWage' AND jobTitle = '$jobTitle'";

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

if (mysqli_num_rows($result) == 0) {
	echo("No records found with query $userQuery");
}
else { 
	echo("<h1>RESULTS</h1>");
	echo("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	echo("<table border = \"1\">");
	echo("<tr><th>EMP ID</th></tr>");
  while ($row = mysqli_fetch_assoc($result)) {
    echo("<tr><td>".$row['empID']."</td></tr>");
  }
	echo("</table>");
}
mysqli_close($connect);
include_once("includes/footer.php");
?>
