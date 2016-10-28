<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('api_application_bundle_container_homepage', new Route('/', array(
    '_controller' => '',
)));

return $collection;
