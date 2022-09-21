<?php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Friendship;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class AddFriendController extends AbstractController
{


    private UserRepository $userRepository;
    private User $user;
    private Friendship $friendship;



    public function __construct(UserRepository $userRepository, User $user, FriendShip $friendship)
    {
        $this->userRepository = $userRepository;
        $this->user = $user;
        $this->friendship = $friendship;


    }

    #[Route('/add/{friend_id}/{origin}', name: "add_friend")]
    public function add($friend_id, $origin): Response
    {
       $friend = $this-> userRepository ->find($friend_id);
        $addfriend = $this->friendship->setFriend($friend);
        $this->user->addFriend($addfriend);

        return $this->redirectToRoute($origin);
    }

    #[Route('/remove/{friend_id}/{origin}', name: "remove_friend")]
    public function remove($friend_id, $origin): Response
    {
        $friend = $this-> userRepository ->find($friend_id);
        $removefriend = $this->friendship->setFriend($friend);
        $this->user->removeFriend($removefriend);

        return $this->redirectToRoute($origin);


    }


}