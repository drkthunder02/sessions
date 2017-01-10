<?php

require_once __DIR__.'/../functions/registry.php';

$session = new \Custom\Sessions\Sessions();

$_SESSION['junk'] = rand(1,100);
$_SESSION['random'] = rand(1,1000);

echo $_SESSION['junk'];
echo '<br>';
echo $_SESSION['random'];
    
?>
