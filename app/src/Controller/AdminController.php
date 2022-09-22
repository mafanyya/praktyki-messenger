<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\HobbyRepository;
use App\Repository\UserRepository;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class AdminController extends AbstractController
{

    private $requestStack;
    private $userRepository;
    private $hobbyRepository;
    private $countryRepository;

    public function __construct(RequestStack $requestStack, UserRepository $userRepository, HobbyRepository $hobbyRepository, CountryRepository $countryRepository)
    {
        $this->requestStack = $requestStack;
        $this->userRepository = $userRepository;
        $this->hobbyRepository = $hobbyRepository;
        $this->countryRepository = $countryRepository;

    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();



        return $this->render('admin/admin.html.twig', [

            'name' => "admin",

            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }

    #[Route('/add_user', name: 'add_user')]

    public function addUser():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'addUser',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,


        ]);
    }

    #[Route('/remove_user', name: 'remove_user')]

    public function removeUser():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        $users = $this->userRepository->findAllUsersExceptCurrentUser($currentId);

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'removeUser',
            'users' => $users,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }

    #[Route('/remove_user/{id}', name: 'remove_user/{id}')]

    public function removeUserId($id):Response
    {
        $user = $this->userRepository->find($id);
        $this->userRepository->remove($user);

        return $this->redirectToRoute('remove_user');
    }

    #[Route('/add_hobby', name: 'add_hobby')]

    public function addHobby():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'addHobby',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }

    #[Route('/remove_hobby', name: 'remove_hobby')]

    public function removeHobby():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        $hobbies = $this->hobbyRepository->findAll();

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'removeHobby',
            'hobbies' => $hobbies,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }

    #[Route('/remove_hobby/{id}', name: 'remove_hobby/{id}')]

    public function removeHobbyId($id):Response
    {
       $hobby = $this->hobbyRepository->find($id);
        $this->hobbyRepository->remove($hobby);

        return $this->redirectToRoute('remove_hobby');
    }

    #[Route('/add_country', name: 'add_country')]

    public function addCountry():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'addCountry',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }

    #[Route('/remove_country', name: 'remove_country')]

    public function removeCountry():Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();

        $countries = $this->countryRepository->findAll();

        return $this->render('admin/add_remove.html.twig',[
            'name' => 'removeCountry',
            'countries' => $countries,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

        ]);
    }
}