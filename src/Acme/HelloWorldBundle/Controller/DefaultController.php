<?php

namespace Acme\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHelloWorldBundle:Default:index.html.twig', array('name' => $name));
    }
}
