<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\CountryRepository;
use App\Repository\HobbyRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class UsersController extends AbstractController
{
    private UserRepository $userRepository;
    private HobbyRepository $hobbyRepository;
    private CountryRepository $countryRepository;
    private $requestStack;

    public function __construct(UserRepository $userRepository, RequestStack $requestStack, HobbyRepository $hobbyRepository, CountryRepository $countryRepository) {
        $this->userRepository = $userRepository;
        $this->hobbyRepository = $hobbyRepository;
        $this->countryRepository = $countryRepository;
        $this->requestStack = $requestStack;
    }

    #[Route('/users', name: 'allUsers')]
    public function allUsers(): Response
    {
        $users = $this->userRepository->findAll();
        $user = $this->getUser();
        $hobbies = $this->hobbyRepository->findAll();
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
                'hobbies' => $hobbies
            ]);
    }

    #[Route('/users/{hobbyId}', name: 'usersByHobby')]
    public function usersByHobby($hobbyId): Response
    {
        $users = $this->userRepository->findUserByHobby($hobbyId);
        $user = $this->getUser();
        $hobbies = $this->hobbyRepository->findAll();
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
            'hobbies' => $hobbies
        ]);
    }


}