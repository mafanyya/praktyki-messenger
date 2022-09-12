<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use App\Repository\CountryRepository;
use App\Repository\HobbyRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        if($email == null)
        {
            $email = "Unknown email";
        }

        $avatar = $user->getAvatar();
        if ($avatar == null)
        {
            $avatar = "https://checklists.expert/images/no-avatar-ff.png";
        }

        $isShowCredentials = $user->isIsShowCredentials();

        $hobbies =$this->hobbyRepository->findHobbiesByUser($id);

        if($hobbies != null)
        {
            $findByHobby = $hobbies[0];
            $usersByHobby = $this->userRepository->findUserByHobbyExceptCurrentUser($findByHobby['id'], $id);
        }else{
            $findByHobby = null;
            $usersByHobby = null;
        }

        $country = $this->countryRepository->findCountryByUser($id);

        if($country != null)
        {
            $country = $country[0];
        }else{
            $country = null;
        }


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
            'isShowCredentials' => $isShowCredentials,
            'findByHobby' => $findByHobby,
            'usersByHobby' => $usersByHobby,

            'id' => $id

        ]);

}
    #[Route('/page/change/{id}', name: 'change/{id}')]
    public function change($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();
        $user = new User();
        $user = $this->userRepository->find($id);
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($user);
            $entityManager->flush();



            return $this->redirectToRoute('{id}', ['id' => $id]);

        }



        return $this->render('page/userForm.html.twig',
        [
            'name' => 'change',
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,
            'user_form' => $form->createView()
        ]);

    }

}
