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
     * @Route("/getdata", name="get_data")
     */
    public function getData()
    {
        $data = array(
            'hardCoder' => '100%',
            'google' => '100%',
            'words' => 'From Here, What Will Happen To This Page',
            'sentence' => 'Slow Coder, Please Wait'
        );
        return new JsonResponse($data, 200);
    }
}
