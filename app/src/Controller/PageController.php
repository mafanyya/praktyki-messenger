<?php

namespace App\Controller;

use App\Form\CountryFormType;
use App\Form\HobbyType;
use App\Form\UserFormType;
use App\Repository\CountryRepository;
use App\Repository\HobbyRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\String\Slugger\SluggerInterface;

class PageController extends AbstractController
{
    private UserRepository $userRepository;
    private HobbyRepository $hobbyRepository;
    private CountryRepository $countryRepository;
    private $requestStack;

    public function __construct(UserRepository $userRepository, RequestStack $requestStack, HobbyRepository $hobbyRepository, CountryRepository $countryRepository)
    {
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
        $isAuth = "true";


        $user = $this->userRepository->find($id);
        $username = $user->getUsername();
        $email = $user->getEmail();
        $avatar = $user->getAvatar();
        $isShowCredentials = $user->isIsShowCredentials();
        $roles = $user->getRoles();


        $hobbies = $this->hobbyRepository->findHobbiesByUser($id);

        if ($hobbies != null) {

            $a = count($hobbies);
            $b = rand(0, $a - 1);
            $findByHobby = $hobbies[$b];
            $usersByHobby = $this->userRepository->findUserByHobbyExceptCurrentUser($findByHobby['id'], $id);

        } else {
            $findByHobby = null;
            $usersByHobby = null;
        }

        $country = $this->countryRepository->findCountryByUser($id);
        if ($country != null) {
            $country = $country[0];
        } else {
            $country = null;
        }

        return $this->render('page/index.html.twig', [
            'name' => $currentLoggedUserUsername,
            'currentId' => $currentLoggedUserId,
            'currentUsername' => $currentLoggedUserUsername,
            'currentAvatar' => $currentLoggedUserAvatar,
            'id' => $id,
            'avatar' => $avatar,
            'username' => $username,
            'email' => $email,
            'hobbies' => $hobbies,
            'country' => $country,
            'isShowCredentials' => $isShowCredentials,
            'findByHobby' => $findByHobby,
            'usersByHobby' => $usersByHobby,
            'roles' => $roles,
            'isAuth' => $isAuth


        ]);
    }
    

    #[Route('/page/change/{id}', name: 'change/{id}')]
    public function change($id, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
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
        $birthdate = $user->getBirthdate();
        $isShowCredentials = $user->isIsShowCredentials();


        $user = $this->userRepository->find($id);
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avatar = $form->get('avatar')->getData();
            if($avatar){
                $originalFilename = pathinfo($avatar->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$avatar->guessExtension();

                    $avatar->move(
                        $this->getParameter('avatar_directory'),
                        $newFilename
                    );



                $user->setAvatar($newFilename);

            }
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
                'id' => $id,
                'user_form' => $form->createView(),
                'avatar' => $avatar,
                'username' => $username,
                'email' => $email,
                'birthdate' => $birthdate,
                'isShowCredentials' => $isShowCredentials,
            ]);
    }

    #[Route('/page/hobbies/{id}', name: 'hobbies/{id}')]
    public function hobbiesForm($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();


        $user = $this->userRepository->find($id);
        $form = $this->createForm(HobbyType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('{id}', ['id' => $id]);
        }

        return $this->render('page/hobbyForm.html.twig',
            [
                'name' => 'change',
                'currentId' => $currentLoggedUserId,
                'currentUsername' => $currentLoggedUserUsername,
                'currentAvatar' => $currentLoggedUserAvatar,
                'hobby_form' => $form->createView()
            ]);
    }

    #[Route('/page/country/{id}', name: 'country/{id}')]
    public function countryForm($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $currentLoggedUserId = $currentLoggedUser->getId();
        $currentLoggedUserUsername = $currentLoggedUser->getUsername();
        $currentLoggedUserAvatar = $currentLoggedUser->getAvatar();


        $user = $this->userRepository->find($id);
        $form = $this->createForm(CountryFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('{id}', ['id' => $id]);
        }

        return $this->render('page/countryForm.html.twig',
            [
                'name' => 'change',
                'currentId' => $currentLoggedUserId,
                'currentUsername' => $currentLoggedUserUsername,
                'currentAvatar' => $currentLoggedUserAvatar,
                'country_form' => $form->createView()
            ]);
    }

}
