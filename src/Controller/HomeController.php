<?php

namespace App\Controller;

use App\Services\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @param ApiService $apiService
     * @return Response
     */
    public function index(ApiService $apiService): Response
    {

//        dd($apiService->getFranceData());

        return $this->render('home/index.html.twig', [
            'data' => $apiService->getFranceData(),
            'departments' => $apiService->getAllData()
        ]);
    }
}
