<?php
include_once ('classes/DbAdmin.php');


$sql = "SELECT * FROM paciente";

$result = select($sql);
print_r ($result);

