<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReaderController extends AbstractController
{
    #[Route('/reader', name: 'app_reader')]
    public function index(): Response
    {
        return $this->render('reader/index.html.twig', [
            'controller_name' => 'ReaderController',
        ]);
    }

    /**
     * @return Reader Return a single reader with his ID
     */
    public function getReader(int $id): Reader
    {
        $reader = $this->getDoctrine()
            ->getRepository(Reader::class)
            ->findOneById($id);

        if (!$reader) {
            throw $this->createNotFoundException(
                'No reader found for id '.$id
            );
        }

        return $reader;
    }
}
