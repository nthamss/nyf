<?php

namespace blueonrails\nearyourflat\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('blueonrailsnearyourflatServiceBundle:Home:index.html.twig');
    }
}
