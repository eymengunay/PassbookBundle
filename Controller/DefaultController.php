<?php

namespace Eo\PassbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EoPassbookBundle:Default:index.html.twig', array('name' => $name));
    }
}
