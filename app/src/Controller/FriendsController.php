<?php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Friendship;
use App\Repository\UserRepository;
use App\Repository\FriendShipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class FriendsController extends AbstractController
{


    private UserRepository $userRepository;
    private User $user;
    private Friendship $friendship;
    private FriendShipRepository $friendShipRepository;
    private $requestStack;


    public function __construct(UserRepository $userRepository, User $user, FriendShip $friendship, FriendShipRepository $friendShipRepository, RequestStack $requestStack)
    {
        $this->userRepository = $userRepository;
        $this->user = $user;
        $this->friendship = $friendship;
        $this->friendShipRepository = $friendShipRepository;
        $this->requestStack = $requestStack;
    }

    #[Route('/friends/{id}', name: 'friends{id}')]

    public function friends($id): Response
    {
        $currentId = $this->requestStack->getSession()->get('filter');

        $friends = $this->friendShipRepository->findFriendsByUser($id);
        dump($friends);

        return $this->render('root/friends.html.twig',
            [
                'id' => $id,
                'name' => 'friends',
                'friends' => $friends

            ]);
    }





    #[Route('/add/{friend_id}/{origin}', name: "add_friend")]
    public function add($friend_id, $origin): Response
    {
       $friend = $this-> userRepository ->find($friend_id);
       $currentId = $this->requestStack->getSession()->get('filter');
       $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
       $fs = new FriendShip();
       $fs->setUser($currentLoggedUser);
       $fs->setFriend($friend);
       $this->friendShipRepository->add($fs);

        return $this->redirectToRoute($origin);
    }

    #[Route('/remove/{friend_id}/{origin}', name: "remove_friend")]
    public function remove($friend_id, $origin): Response
    {
        $friend = $this-> userRepository ->find($friend_id);
        $currentId = $this->requestStack->getSession()->get('filter');
        $currentLoggedUser = $this->userRepository->find($currentId['loggedUserId']);
        $fs = new FriendShip();
        $fs->setUser($currentLoggedUser);
        $fs->setFriend($friend);
        $this->friendShipRepository->remove($fs);

        return $this->redirectToRoute($origin);

    }


}