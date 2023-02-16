<?php

namespace App\Models\Observer;

use Carbon\Carbon;

class OrderRepository implements \SplSubject
{
    public \DateTime $deliveryAt;
    private \SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeDatetime(Carbon $deliveryAt): void
    {
        $this->deliveryAt = $deliveryAt;
        $this->notify();
    }
}
