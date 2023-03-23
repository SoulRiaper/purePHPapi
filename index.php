<?php
include "RoutSerializer.php";

$sz = new RoutSerializer($_GET);
$urls = $sz->getRoutArray();

include_once $urls[0].'/controller.php';

$executeTask(array_slice($urls, 1));
?>