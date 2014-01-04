<?php

namespace Xiod\Bundle\AdminGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EntitiesController extends Controller
{
    public function indexAction()
    {
        return $this->render('XiodAdminGeneratorBundle:Default:index.html.twig', array());
    }
}
