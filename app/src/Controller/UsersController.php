<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class UsersController extends AbstractController
{
    private UserRepository $userRepository;
    private $requestStack;

    public function __construct(UserRepository $userRepository, RequestStack $requestStack) {
        $this->userRepository = $userRepository;
        $this->requestStack = $requestStack;
    }

    #[Route('/users', name: 'allUsers')]
    public function allUsers(): Response
    {
        $users = $this->userRepository->findAll();

        $user = $this->getUser();
        $userId = null;
        if($user)
        {
            $id = $this->requestStack->getSession()->get('filter');
            $currentLoggedUser = $this->userRepository->find($id['loggedUserId']);
            $currentLoggedUserId = $currentLoggedUser->getId();
            $currentLoggedUserUsername = $currentLoggedUser->getUsername();
            $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();
        }


        return $this->render('root/users.html.twig',
            [
                'name' => 'Users',
                'users' => $users,
                'id' => $userId,
                'currentId' => $currentLoggedUserId,
                'currentUsername' => $currentLoggedUserUsername,
                'currentAvatar' => $currentLoggedUserAvatar,
            ]);
    }


}