<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FeedController extends AbstractController
{
//   private Request $request;
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager, RequestStack
                                               $requestStack) {
        $this->userRepository = $userRepository;
        $this->requestStack = $requestStack;
    }


    #[Route('/feed', name: 'feed')]
    public function index(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $newUser = new User();
        $currentLoggedUserId = null;
        $currentLoggedUserUsername = null;
        $currentLoggedUserAvatar = null;

        if($user)
        {
            $id = $this->requestStack->getSession()->get('filter');
            $currentLoggedUser = $this->userRepository->find($id['loggedUserId']);
            $currentLoggedUserId = $currentLoggedUser->getId();
            $currentLoggedUserUsername = $currentLoggedUser->getUsername();
            $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();
            $isAuth = "true";
        }

        return $this->render('root/feed.html.twig', [
            'name' => 'Feed',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }


}