<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ImportExcelController extends AbstractController
{
    #[Route('/import/excel', name: 'app_import_excel')]
    public function index(): JsonResponse
    {
        dump('here');
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ImportExcelController.php',
        ]);
    }
}
