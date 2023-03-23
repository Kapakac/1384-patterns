<?php

declare(strict_types=1);

namespace App\Models\State;

use App\Contracts\State\State;

class GumballMachine
{
    private int $count = 0;

    public State $soldOutState;

    public State $noQuarterState;

    public State $hasQuarterState;

    public State $soldState;

    public State $winnerState;

    public State $state;


    public function __construct(int $number = 10)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->soldOutState;

        $this->count = $number;
        if ($number > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function setState(State $state): State
    {
        return $this->state = $state;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function refill(int $count): void
    {
        $this->count = $this->count + $count;
        $this->state->refill();

        echo 'The gumball machine was just refilled; its new count is: ' . $this->count . '</br>';
    }

    public function releaseBall(): void
    {
        if ($this->count > 0) {
            $this->count--;
        }

        echo 'A gumball comes rolling out the slot...</br>';
    }

    public function printInfo(): string
    {
        $result = '</br></br>';
        $result .= 'Mighty Gumball, Inc.</br>';
        $result .= 'PHP-enabled Standing Gumball Model #64</br>';
        $result .= 'Inventory: ' . $this->getCount() . ' gumball';
        if ($this->getCount() != 1) {
            $result .= 's';
        }
        $result .= '</br>';
        $result .= 'Machine is ' . $this->state->printInfo() . '</br>';

        return $result;
    }
}
