<?php

namespace App\Controller;

use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{
    #[Route('/announcement', name: 'app_announcement', methods:["POST"])]
    public function index($data, Request $request): JsonResponse
    {
        var_dump($request->getQuery());
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AnnouncementController.php',
        ]);
    }
}
