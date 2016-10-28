<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('api_application_bundle_connection_homepage', new Route('/api/application/service/connection', array(
    '_controller' => 'ApiApplicationBundleConnectionBundle:Default:index',
)));

return $collection;
