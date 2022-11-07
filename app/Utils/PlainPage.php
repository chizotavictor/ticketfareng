<?php
namespace App\Utils;

class PlainPage
{
  static $routes = ['office.event.create.page'];

  static function routeNames()
  {
    return self::$routes;
  }
}
