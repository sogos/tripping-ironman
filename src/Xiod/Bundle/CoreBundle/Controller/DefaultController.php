<?php

namespace Xiod\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XiodCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
