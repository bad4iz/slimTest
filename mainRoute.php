<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 22.10.17
 * Time: 8:24
 */
// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
  return $response->write("Hello " . $args['name']);
});
