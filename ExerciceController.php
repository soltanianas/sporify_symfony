<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Form\ExerciceType;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    /**
     * @Route("/exercice", name="exercice")
     */
    public function index(): Response
    {
        return $this->render('exercice/index.html.twig', [
            'controller_name' => 'ExerciceController',
        ]);
    }
    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param ExerciceRepository $repository
     * @return Response
     * @Route("admin/exercice", name="admin_exercice")
     */
    public function exerciceList(Request $request, EntityManagerInterface $manager,ExerciceRepository $repository): Response
    {
       $exercice = $this->getDoctrine()->getRepository(Exercice::class)->findAll();

        $exercice = new Exercice();
        $form = $this->createForm(ExerciceType::class, $exercice);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($exercice);
            $manager->flush();
            return $this->redirectToRoute('admin_exercice');
        }
        $exercice=$repository->findAll();
        return $this->render('exercice/liste_exercice.html.twig', ["form"=>$form->createView(), "exercice"=>$exercice]);

    }




    /**
     * @Route("admin/update-exercice/{id}", name="update_exercice")
     */
    public function update(Request $request, EntityManagerInterface $nut, $id): Response
    {
        if ($request->isMethod('post')) {
            // your code
            $exercice = $this->getDoctrine()->getRepository(Exercice::class)->find($id);
            $exercice->setName($request->request->get('name'));
            $exercice->setDuration($request->request->get('duration'));
            $exercice->setLocation($request->request->get('location'));

        }
    }

    /**
     * @Route("/admin/delete-exercice/{id}", name="delete_exercice")
     */
    public function delete($id, EntityManagerInterface $manager): Response
    {
        $exercice = $this->getDoctrine()->getRepository(Exercice::class)->find($id);
        $manager->remove($exercice);
        $manager->flush();
        return $this->redirectToRoute('admin_exercice');
    }

    /**
     * @Route("/front/liste-exercicet-front", name="liste_exercice_front")
     */
    public function listeexerciceFront(EntityManagerInterface $manager): Response
    {
        $exercice = $this->getDoctrine()->getRepository(Exercice::class)->findAll();
        return $this->render('exercice/liste_exercice_front.html.twig', ["exercice"=>$exercice]);
    }



    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}
