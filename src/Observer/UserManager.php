<?php

namespace App\Observer;

use App\Entity\User;
use JetBrains\PhpStorm\Pure;
use SplObjectStorage;
use SplObserver;
use SplSubject;


class UserManager implements SplSubject
{
    protected User $user;
    protected \SplObjectStorage $observers;

    #[Pure] public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)  {
            $observer->update($this);
        }
    }

    public function create(User $user)
    {
        $this->user = $user;

        $this->notify();
    }

    public function getUser(): User
    {
        return $this->user;
    }

}