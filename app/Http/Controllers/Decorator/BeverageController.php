<?php

declare(strict_types=1);

namespace App\Http\Controllers\Decorator;

use App\Abstracts\Decorator\SizeBeverage;
use App\Http\Controllers\Controller;
use App\Models\Decorator\Cappuccino;
use App\Models\Decorator\DoubleMilk;
use App\Models\Decorator\MapleSyrup;
use App\Models\Decorator\Caramel;
use App\Models\Decorator\Vanilla;
use App\Models\Decorator\Latte;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Декоратор"
     */
    public function index(Request $request)
    {
        $cappuccino = new Cappuccino();
        $cappuccino->setSize(SizeBeverage::ExtraLarge);
        $sizeCappuccino = $cappuccino->getSize()->name;
        $cappuccino = new MapleSyrup($cappuccino);
        $cappuccino = new DoubleMilk($cappuccino);

        $latte = new Latte();
        $latte->setSize(SizeBeverage::Middle);
        $sizeLatte = $latte->getSize()->name;
        $latte = new Vanilla($latte);
        $latte = new Caramel($latte);

        return [
            $sizeCappuccino . ' - ' . $cappuccino->getDescription() . ' costs ' . $cappuccino->calcCost(),
            $sizeLatte . ' - ' . $latte->getDescription() . ' costs ' . $latte->calcCost()
        ];
    }
}
