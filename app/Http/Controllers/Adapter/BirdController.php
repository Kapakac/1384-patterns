<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adapter;

use App\Models\Adapter\TurkeyAdapter;
use App\Http\Controllers\Controller;
use App\Models\Adapter\MallardDuck;
use App\Models\Adapter\WildTurkey;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Адаптер"
     */
    public function index(Request $request)
    {
        $mallardDuck = new MallardDuck();

        $wildTurkey = new WildTurkey();

        $duck = new TurkeyAdapter($wildTurkey);

        return [
            'Duck' => [$mallardDuck->quack() => $mallardDuck->fly()],
            'Turkey' => [$wildTurkey->gobble() => $wildTurkey->fly()],
            'TurkeyAdapter' => [$duck->quack() => $duck->fly()]
        ];
    }
}
