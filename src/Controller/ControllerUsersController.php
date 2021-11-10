<?php

namespace App\Controller;

use App\Entity\Costumer;
use App\Repository\CostumerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ControllerUsersController extends AbstractController
{
    /**
     * @Route("/controller/users", name="controller_users")
     */
    public function index(CostumerRepository $constumerRepository): Response
    {
        return $this->render('controller_users/index.html.twig', [
            'costumers' => $constumerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/user/new", name="Create_user")
     */
    public function CreateUser(Request $request): Response
    {
        // creation du formulaire
        $form = $this->createFormBuilder()
             ->add('Prenom', TextType::class)
             ->add('Nom', TextType::class)
             ->add('Telephone', IntegerType::class)
             ->add('Location', TextType::class)
             ->add('Contact', TextType::class)
             ->add('Image', FileType::class)
             ->add('Save', SubmitType::class, ['label' => 'Create User'])
             ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $coverImage = $form->get('Image')->getData();

            if($coverImage)
            {
                $imageName = md5(uniqid()) . '.' . $coverImage->guessExtension();

                $coverImage->move(
                    $this->getParameter('image_directory'),
                    $imageName
                );
            }

            $data = $form->getData();
            $use = new Costumer();
            $use->setPrenom($data['Prenom']);
            $use->setNom($data['Nom']);
            $use->setTelephone($data['Telephone']);
            $use->setLocation($data['Location']);
            $use->setContact($data['Contact']);
            $use->setImage($imageName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($use);
            $em->flush();
            return $this->redirectToRoute('controller_users');
        }
        
        return $this->render('controller_users/new.html.twig', [
            'form' => $form->createView(),
        ]);
          
    }

    /**
     * @Route("/delete/{id}", name="delete_users")
     */
    public function deleteUser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $uses = $this->getDoctrine()->getRepository(Costumer::class);
        $uses = $uses->find($id);

        if(!$uses)
        {
            throw $this->createNotFoundException(
                'Il y a pas costumer avec identifiant :'.$id
            );
        }
        
        $em->remove($uses);
        $em->flush();

        return $this->redirectToRoute('list_user');

    }

    /**
     * @Route("/edit/{id}", name="edit_users")
     */
    public function editUser(Request $request, $id)
    {
        $annonce = $this->getDoctrine()->getRepository(Costumer::class);
        $annonce = $annonce->find($id);

        if(!$annonce)
        {
            throw $this->createNotFoundException(
                ' Aucune annonce avec identifiant id'.$id
            );
        }

        $form = $this->createFormBuilder()
             ->add('Prenom', TextType::class)
             ->add('Nom', TextType::class)
             ->add('Telephone', IntegerType::class)
             ->add('Location', TextType::class)
             ->add('Contact', TextType::class)
             ->add('Image', FileType::class)
             ->add('Save', SubmitType::class, ['label' => ' User'])
             ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $coverImage = $form->get('Image')->getData();

            if($coverImage)
            {
                $imageName = md5(uniqid()) . '.' . $coverImage->guessExtension();

                $coverImage->move(
                    $this->getParameter('image_directory'),
                    $imageName
                );
            }

            $data = $form->getData();
            $use = new Costumer();
            $use->setPrenom($data['Prenom']);
            $use->setNom($data['Nom']);
            $use->setTelephone($data['Telephone']);
            $use->setLocation($data['Location']);
            $use->setContact($data['Contact']);
            $use->setImage($imageName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($use);
            $em->flush();
            return $this->redirectToRoute('controller_users');
        }
        
        return $this->render('controller_users/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    
    }

    /**
     * @Route("/list/users", name="list_user")
     */
    public function ListUsers(CostumerRepository $constumerRepository): Response{
        return $this->render('controller_users/list.html.twig', [
            'costumers' => $constumerRepository->findAll(),
        ]);
    }
}
