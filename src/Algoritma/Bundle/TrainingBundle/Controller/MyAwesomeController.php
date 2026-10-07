<?php

namespace Algoritma\Bundle\TrainingBundle\Controller;

use Algoritma\Bundle\TrainingBundle\Entity\MyAwesomeEntity;
use Algoritma\Bundle\TrainingBundle\Form\Type\MyAwesomeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;


#[AsController]
class MyAwesomeController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {
    }

    #[Route(name: 'my_awesome_route', path: '/my-awesome-route')]
    #[Template("@AlgoritmaTraining/training/my_awesome_route/index.html.twig")]
    public function index()
    {
       return [];
    }

    #[Route(path: '/my-awesome-create', name: 'my_awesome_create')]
    #[Template("@AlgoritmaTraining/training/my_awesome_route/create.html.twig")]
    public function create(Request $request)
    {
        $myAwesomeEntity = new MyAwesomeEntity();

        return $this->update($myAwesomeEntity, $request);
    }

    #[Route(path: '/my-awesome-edit/{id}', name: 'my_awesome_edit')]
    #[Template("@AlgoritmaTraining/training/my_awesome_route/create.html.twig")]
    public function edit(MyAwesomeEntity $awesomeEntity, Request $request)
    {
        return $this->update($awesomeEntity, $request);
    }

    #[Route(path: '/my-awesome-delete/{id}', name: 'my_awesome_delete', methods: ['DELETE'])]
    public function delete(MyAwesomeEntity $awesomeEntity, Request $request)
    {
        $this->entityManager->remove($awesomeEntity);
        $this->entityManager->flush();

        return $this->json(['success' => true]);
    }

    private function update(MyAwesomeEntity $myAwesomeEntity, Request $request)
    {
        $form = $this->createForm(MyAwesomeFormType::class, $myAwesomeEntity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($myAwesomeEntity);
            $this->entityManager->flush();
        }

        return [
            'entity' => $myAwesomeEntity,
            'form' => $form->createView()
        ];
    }
}