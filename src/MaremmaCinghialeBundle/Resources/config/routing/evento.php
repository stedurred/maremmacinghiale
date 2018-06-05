<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('evento_index', new Route(
    '/',
    array('_controller' => 'MaremmaCinghialeBundle:Evento:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('evento_show', new Route(
    '/{id}/show',
    array('_controller' => 'MaremmaCinghialeBundle:Evento:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('evento_new', new Route(
    '/new',
    array('_controller' => 'MaremmaCinghialeBundle:Evento:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('evento_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'MaremmaCinghialeBundle:Evento:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('evento_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MaremmaCinghialeBundle:Evento:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
