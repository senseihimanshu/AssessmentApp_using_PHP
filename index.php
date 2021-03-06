<?php
// Include Config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Model.php');
require('classes/Controller.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/evaluates.php');

require('models/home.php');
require('models/user.php');
require('models/evaluate.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}