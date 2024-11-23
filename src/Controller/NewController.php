<?php

namespace App\Controller;

use App\Repository\DataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/data')]
class NewController extends AbstractController
{
    public function __construct(private readonly DataRepository $dataRepository)
    {
    }

    #[Route('/', name: 'new', methods: ['GET'])]
    public function getAll(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/{id<\d+>}', name: 'new1', methods: ['GET'])]
    public function getOne(int $id): Response
    {
        $data = $this->dataRepository->findOne($id) ?? throw $this->createNotFoundException('Data not found');

        return new Response($this->json($data));
    }
}
