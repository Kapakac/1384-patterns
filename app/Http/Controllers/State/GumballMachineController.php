<?php

declare(strict_types=1);

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Models\State\GumballMachine;
use Illuminate\Http\Request;

class GumballMachineController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Состояние"
     */
    public function index(Request $request)
    {
        $gumballMachine = new GumballMachine();

        echo $gumballMachine->printInfo();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->printInfo();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->printInfo();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->printInfo();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->printInfo();
    }
}
