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

class PageController extends AbstractController
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

    #[Route('/page/{id}', name: '{id}')]
    public function index($id): Response
    {

        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();
        $user = $this->userRepository->find($id);
        $username = $user->getUsername();
        $email = $user->getEmail();
        $avatar = $user->getAvatar();
        $hobbies =$this->hobbyRepository->findHobbiesByUser($id);
        $country = $this->countryRepository->findCountryByUser($id);
        $country = $country[0];
        $findByHobby = $hobbies[0];
        $usersByHobby = $this->userRepository->findUserByHobbyExceptCurrentUser($findByHobby['id'], $id);

        return $this->render('page/index.html.twig', [
            'name' => $currentLoggedUserUsername,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,
            'avatar' => $avatar,
            'username' => $username,

            'email' => $email,
            'hobbies' => $hobbies,
            'country' => $country,
            'findByHobby' => $findByHobby,
            'usersByHobby' => $usersByHobby,

            'id' => $id




        ]);
    }


}