<?php

namespace App\Controller;

use App\Entity\SomeEntity;
use App\Form\EntityFormType;
use App\Repository\SomeEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use JetBrains\PhpStorm\NoReturn;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    private $em;
    private $someEntityRepository;
    public function __construct(SomeEntityRepository $someEntityRepository,EntityManagerInterface $em)
    {
        $this->someEntityRepository = $someEntityRepository;
        $this->em = $em;
    }
//    #[Route('/test/', name: 'app_test')]
//    public function index(): Response
//    {
//        $array = ['first element', 'second element', 'third element'];
//        return $this->render('test.html.twig', array('elements' => $array));
//    }

//    #[Route(path: '/first', name: 'first')]
//    public function first(SomeEntityRepository $repo): Response
//    {
//        $someEntities = $repo->findAll();
//        dd($someEntities);
//        return $this->render('test.html.twig');
//    }
//
//    #[NoReturn] #[Route(path: '/second', name: 'second')]
//    public function second(): Response
//    {
//        $entities = $this->em->getRepository(SomeEntity::class);
//        $someEntities = $entities->findAll();
//        dd($someEntities);
//        return $this->render('test.html.twig');
//    }

    #[Route(path: '/blog', name: 'blog')]
    public function index(): Response
    {
        $someEntity = $this->someEntityRepository->findAll();

        return $this->render('blog/index.html.twig',['some_entity' => $someEntity]);
    }

    #[Route(path: '/blog/create', name: 'create')]
    public function create(Request $request): Response
    {
        $someEntity = new SomeEntity();
        $form = $this->createForm(EntityFormType::class, $someEntity);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $newEntity = $form->getData();

            $this->em->persist($newEntity);
            $this->em->flush();

            return $this->redirectToRoute('blog');

        }

        return $this->render('blog/create.html.twig',[
            '',
            'form' => $form->createView()]);
    }

    #[Route(path: '/blog/edit/{id}', name: 'edit')]
    public function edit($id, Request $request): Response
    {
        $someEntity = $this->someEntityRepository->find($id);

        $form = $this->createForm(EntityFormType::class, $someEntity);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
//            dd($form);
//            $newEntity = $form->getData();
            if($form->get('title')) {
                $someEntity->setTitle($form->get('title')->getData());
            }
            if($form->get('amountOfEntity')) {
                $someEntity->setAmountOfEntity($form->get('amountOfEntity')->getData());
            }
            if($form->get('insertDate')) {
                $someEntity->setInsertDate($form->get('insertDate')->getData());
            }
            $this->em->flush();

            return $this->redirectToRoute('blog');
        }
//
//            $this->em->persist($newEntity);
//            $this->em->flush();
//
//            return $this->redirectToRoute('blog');
//
//        }

        return $this->render('blog/edit.html.twig',[
            'blog' => $someEntity,
            'form' => $form->createView()]);
    }

    #[Route(path: 'blog/delete/{id}', name: 'delete', methods: ['GET', 'DELETE'])]
    public function delete($id, Request $request): Response
    {
        $someEntity = $this->someEntityRepository->find($id);
        $this->em->remove($someEntity);
        $this->em->flush();

        return $this->redirectToRoute('blog');
    }

    #[Route(path: '/blog/{id}', name: 'comment', methods: ['GET'])]
    public function show($id): Response
    {
        $someEntity = $this->someEntityRepository->find($id);

        return $this->render('blog/show.html.twig',['comment' => $someEntity]);
    }
}
