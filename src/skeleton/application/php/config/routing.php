<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('homepage', new Route('/', array(
    '_controller' => 'FrameworkBundle:Default:index',
)));

return $collection;
