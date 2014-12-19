<?php

namespace MS\MsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MSMsBundle:Default:index.html.twig', array('name' => $name));
    }
}
