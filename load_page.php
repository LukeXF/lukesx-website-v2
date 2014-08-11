<?php

if(!$_POST['p']) die("0");

$page = (int)$_POST['p'];

if(file_exists('pages/'.$page.'.html'))
echo file_get_contents('pages/'.$page.'.html');

else echo 'There is no such page!';
?>
