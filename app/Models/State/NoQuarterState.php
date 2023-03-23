<?php

declare(strict_types=1);

namespace App\Models\State;

use App\Contracts\State\State;

class NoQuarterState implements State
{

    public function __construct(public GumballMachine $gumballMachine)
    {
    }

    public function insertQuarter(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());

        echo 'You inserted a quarter</br>';
    }

    public function ejectQuarter(): void
    {
        echo 'You haven\'t inserted a quarter</br>';
    }

    public function turnCrank(): void
    {
        echo 'You turned, but there\'s no quarter</br>';
    }

    public function dispense(): void
    {
        echo 'You need to pay first</br>';
    }

    public function refill()
    {
    }

    public function printInfo(): string
    {
        return 'waiting for quarter';
    }
}
