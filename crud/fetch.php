<?php
include('db.php');

$query = $connection->query('Select * from sb_learn_more');

$query->execute();



?>
   