<?php

declare(strict_types=1);

namespace App\Contracts\State;

interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();

    public function refill();
}
