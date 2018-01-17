<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('index', new Route('/index', array(
    '_controller' => 'app:Index:index',
)));

$collection->add('list', new Route('/contact/list', array(
    '_controller' => 'AppBundle:Contact:list',
)));

return $collection;