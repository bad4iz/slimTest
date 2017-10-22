<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 22.10.17
 * Time: 8:39
 */

class Rout {
  function rout($app){
    $app->get('/', function ($request, $response, $args) {
      return $response->write("Hello Index");
    });
  }
}