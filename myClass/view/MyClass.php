<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 21.10.17
 * Time: 16:23
 */

namespace MyClass\view;


class MyClass {

    function view(){
      echo 'ssss';
    }

  function rout($app){

    $app->get('/hello/{name}', function ($request, $response, $args) {
      return $response->write("Hello " . $args['name']);
    });
  }

}