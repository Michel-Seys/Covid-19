<?php

namespace App\Controller;

use App\Services\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepartementController extends AbstractController
{
    /**
     * @Route("/departement/{department}", name="app_department")
     * @param string $department
     * @param ApiService $apiService
     * @return Response
     */
    public function index(string $department, ApiService $apiService): Response
    {

        return $this->render('departement/index.html.twig', [
            'data' => $apiService->getDepartmentData($department),
        ]);
    }
}
