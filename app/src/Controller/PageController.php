<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class PageController extends AbstractController
{
    private UserRepository $userRepository;
    private $requestStack;

    public function __construct(UserRepository $userRepository, RequestStack $requestStack) {
        $this->userRepository = $userRepository;
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
        $country = $user->getEmail();
        $email = $user->getCountry();
        $avatar = $user->getAvatar();

            if($user == null)
            {
                $avatar = "https://miro.medium.com/max/720/1*W35QUSvGpcLuxPo3SRTH4w.png";
            }
            if($user == null)
            {
                $email = "Email unknown";
            }

        return $this->render('page/index.html.twig', [
            'name' => $currentLoggedUserUsername,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,
            'avatar' => $avatar,
            'username' => $username,
            'country' => $country,
            'email' => $email


        ]);
    }


}