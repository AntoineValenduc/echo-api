<?php

namespace App\Controller;

use App\Service\ReaderService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Uid\Uuid;

final class ReaderController extends AbstractController
{
    public function __construct(
        private readonly ReaderService $readerService
    ) {
    }

    #[Route('/reader', name: 'app_reader')]
    public function index(): Response
    {
        return $this->render('reader/index.html.twig', [
            'controller_name' => 'ReaderController',
        ]);
    }

    /**
     * Return a single reader output DTO by its ID
     */
    #[Route('/reader/{id}', name: 'app_reader_get', methods: ['GET'])]
    public function getReader(Uuid $id): JsonResponse
    {
        try {
            $reader = $this->readerService->getById($id);

            return $this->json($reader);
        } catch (\InvalidArgumentException $e) {
            throw $this->createNotFoundException($e->getMessage());
        }
    }
}
