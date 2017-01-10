<?php

require_once __DIR__.'/../functions/registry.php';

//global $session;
$session = new \Custom\Sessions\Sessions();

echo 'Session Contents:<br>';
echo $_SESSION['junk'];
echo '<br>';
echo $_SESSION['random'];
    
?>
