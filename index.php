<?php
include('./vendor/autoload.php');

$object = new Rusdteam\Ajax();
$object->addCallback('redirect');

$object->createElement('div');

$object->execute();