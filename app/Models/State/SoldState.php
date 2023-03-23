<?php

namespace App\Models\State;

use App\Contracts\State\State;

class SoldState implements State
{
    public function __construct(public GumballMachine $gumballMachine)
    {
    }

    public function insertQuarter(): void
    {
        echo 'Please wait, we\'re already giving you a gumball</br>';
    }

    public function ejectQuarter(): void
    {
        echo 'Sorry, you already turned the crank</br>';
    }

    public function turnCrank(): void
    {
        echo 'Turning twice doesn\'t get you another gumball!</br>';
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());

            echo 'Oops, out of gumballs!</br>';
        }
    }

    public function refill()
    {
    }

    public function printInfo(): string
    {
        return 'dispensing a gumball';
    }
}
