<?php

namespace App\Models\State;

use App\Contracts\State\State;

class WinnerState implements State
{
    public function __construct(public GumballMachine $gumballMachine)
    {
    }

    public function insertQuarter(): void
    {
        echo 'Please wait, we\'re already giving you a Gumball</br>';
    }

    public function ejectQuarter(): void
    {
        echo 'Please wait, we\'re already giving you a Gumball</br>';
    }

    public function turnCrank(): void
    {
        echo 'Turning again doesn\'t get you another gumball!</br>';
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() === 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo 'YOU\'RE A WINNER! You got two gumballs for your quarter</br>';
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
                echo 'Oops, out of gumballs!</br>';
            }
        }
    }

    public function refill()
    {
    }

    public function printInfo(): string
    {
        return 'despensing two gumballs for your quarter, because YOU\'RE A WINNER!';
    }
}
