<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class RootController extends AbstractController
{


    private UserRepository $userRepository;
    private $requestStack;

    public function __construct(UserRepository $userRepository, RequestStack $requestStack) {
        $this->userRepository = $userRepository;
        $this->requestStack = $requestStack;
    }

    #[Route('/', name: 'root')]
    public function index(): Response
    {
        $user = $this->getUser();
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
        }

        return $this->render('base.html.twig', [
            'name' => 'Home',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,

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
    

    #[Route('/test/{id}', name: 'test')]

    public function test($id): Response
    {
        return $this->render('test.html.twig',
        [
            'id' => $id,
            'name' => 'test'
        ]);
    }

}