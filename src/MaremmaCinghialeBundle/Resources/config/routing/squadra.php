<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('squadra_index', new Route(
    '/',
    array('_controller' => 'MaremmaCinghialeBundle:Squadra:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('squadra_show', new Route(
    '/{id}/show',
    array('_controller' => 'MaremmaCinghialeBundle:Squadra:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('squadra_new', new Route(
    '/new',
    array('_controller' => 'MaremmaCinghialeBundle:Squadra:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('squadra_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'MaremmaCinghialeBundle:Squadra:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('squadra_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MaremmaCinghialeBundle:Squadra:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
