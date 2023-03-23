<?php

namespace App\Models\State;

use App\Contracts\State\State;

class HasQuarterState implements State
{
    public function __construct(public GumballMachine $gumballMachine)
    {
    }

    public function insertQuarter(): void
    {
        echo 'You can\'t insert another quarter</br>';
    }

    public function ejectQuarter(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());

        echo 'Quarter returned</br>';
    }

    public function turnCrank(): void
    {
        $winner = rand(0, 10);

        if (($winner === 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }

        echo 'You turned...</br>';
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed</br>';
    }

    public function refill()
    {
    }

    public function printInfo(): string
    {
        return 'waiting for turn of crank';
    }
}
