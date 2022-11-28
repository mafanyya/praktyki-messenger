<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RootController extends AbstractController
{


    private UserRepository $userRepository;



    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager, RequestStack
    $requestStack) {
        $this->userRepository = $userRepository;
        $this->requestStack = $requestStack;


    }

    #[Route('/', name: 'root')]
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $newUser = new User();
        $currentLoggedUserId = null;
        $currentLoggedUserUsername = null;
        $currentLoggedUserAvatar = null;
        $isValid = "true";

        if($user)
        {
            $id = $this->requestStack->getSession()->get('filter');
            $currentLoggedUser = $this->userRepository->find($id['loggedUserId']);
            $currentLoggedUserId = $currentLoggedUser->getId();
            $currentLoggedUserUsername = $currentLoggedUser->getUsername();
            $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();
        }


        $form = $this->createForm(RegistrationFormType::class, $newUser);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            if($form->isValid()){
                $isValid = "true";
            }else{
                $isValid = "false";
            }


        }

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $newUser->setPassword(
                $userPasswordHasher->hashPassword(
                    $newUser,
                    $form->get('plainPassword')->getData()
                )
            );
            $newUser->setRoles(['ROLE_USER']);

            $entityManager->persist($newUser);
            $entityManager->flush();


            return $this->redirectToRoute('root');
        }






        return $this->render('root/index.html.twig', [
            'name' => 'Home',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,
            'registrationForm' => $form->createView(),
            'isValid' => $isValid



        ]);
    }
    #[Route('/success', name: "success")]
    public function success():Response
    {
        $currentLoggedUser = $this->userRepository->find($this->getUser());
        $userId = $currentLoggedUser->getId();
        $session = $this->requestStack->getSession();
        $session->set('filter', array('loggedUserId' => $userId));

        return $this->redirectToRoute('root');
    }
    

    #[Route('/test', name: 'test')]

    public function test(): Response
    {
        return $this->render('test.html.twig',
        [

            'name' => 'test'
        ]);
    }

}