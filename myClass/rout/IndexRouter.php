<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 22.10.17
 * Time: 14:07
 */

namespace MyClass\rout;


class IndexRouter extends Router {

  function registerRouter() {

    $this->app->get('/', function ($request, $response, $args) {
        return $response->write("Hello Index");
      });

  }
}