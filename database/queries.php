<?php

function hourly_wage_less_than_ten_dollars_query () {
    $userQuery = "SELECT empID, firstName, lastName";
    $userQuery .= " FROM personnel";
    $userQuery .= " WHERE hourlyWage < 10.00";
    return $userQuery;
}

function update_employee () {
  $userQuery = "UPDATE personnel SET lastName = 'Jackson', jobTitle = 'Manager'";
  $userQuery .= " WHERE empID = '12353'";
  return $userQuery;
}
