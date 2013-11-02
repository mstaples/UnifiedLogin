<?php

namespace ONN\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ONNUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
