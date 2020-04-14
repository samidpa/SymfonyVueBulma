<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/product", name="product")
     */
    public function product()
    {
        return $this->render('product.html.twig');
    }
    
    /**
     * @Route("/cashier", name="cashier")
     */
    public function cashier()
    {
        return $this->render('cashier.html.twig');
    }

    /**
     * @Route("/getdata", name="get_data")
     */
    public function getData()
    {
        return new JsonResponse(array('message' => 'Dimas!'), 200);
    }
}
