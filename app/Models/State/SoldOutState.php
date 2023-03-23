<?php

namespace App\Models\State;

use App\Contracts\State\State;

class SoldOutState implements State
{
    public function __construct(public GumballMachine $gumballMachine)
    {
    }

    public function insertQuarter(): void
    {
        echo 'You can\'t insert a quarter, the machine is sold out</br>';
    }

    public function ejectQuarter(): void
    {
        echo 'You can\'t eject, you haven\'t inserted a quarter yet</br>';
    }

    public function turnCrank(): void
    {
        echo 'You turned, but there are no gumballs</br>';
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed</br>';
    }

    public function refill(): State
    {
        return $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function printInfo(): string
    {
        return 'sold out';
    }
}
