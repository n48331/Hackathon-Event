<?php

$host = "sql202.epizy.com"; /* Host name */
$user = "epiz_28046783"; /* User */
$password = "ptOibJxMfudLJkT"; /* Password */
$dbname = "epiz_28046783_hardtask_1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}