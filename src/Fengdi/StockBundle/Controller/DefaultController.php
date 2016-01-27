<?php

namespace Fengdi\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FengdiStockBundle:Default:index.html.twig');
    }
}
