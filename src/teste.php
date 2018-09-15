<?php
include_once ('classes/DbAdmin.php');


$sql = "SELECT * FROM usuario";

$result = select($sql);
print_r ($result);