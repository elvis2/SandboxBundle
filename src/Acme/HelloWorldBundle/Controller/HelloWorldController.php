<?php

// src/Acme/HelloWorldBundle/Controller/HelloWorldController.php
namespace Acme\HelloWoroldBundle\Controller;

use Symfony\Component\HttpFoundate\Response;

class HelloWorldController {

  public function indexAction($name) {
    return new Response('<html><body>Hello ' . $name . '!</body></html>');
  }

}
