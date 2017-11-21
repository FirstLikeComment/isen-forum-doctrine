<?php

// chargement de l'autoloader de composer
require_once 'vendor/autoload.php';

use Isen\Controller\ForumController;

(new ForumController())->handle();