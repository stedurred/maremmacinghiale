<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('maremma_cinghiale_homepage', new Route('/', array(
    '_controller' => 'MaremmaCinghialeBundle:Default:index',
)));

$collection->add('search', new Route('/search', array(
    '_controller' => 'MaremmaCinghialeBundle:Search:search',
)));

$collection->add('searchEvents', new Route('/searchEvents', array(
    '_controller' => 'MaremmaCinghialeBundle:Search:searchEvents',
)));

return $collection;