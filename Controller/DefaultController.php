<?php

namespace BBIT\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BBITBootstrapBundle:Default:index.html.twig', array('name' => $name));
    }
}
