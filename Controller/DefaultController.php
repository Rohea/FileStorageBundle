<?php

namespace Rohea\FileStorageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RoheaFileStorageBundle:Default:index.html.twig', array('name' => $name));
    }
}
