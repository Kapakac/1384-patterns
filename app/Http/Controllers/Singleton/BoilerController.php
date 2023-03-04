<?php

declare(strict_types=1);

namespace App\Http\Controllers\Singleton;

use App\Http\Controllers\Controller;
use App\Models\Singleton\Boiler;
use Illuminate\Http\Request;

class BoilerController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Одиночка"
     */
    public function index(Request $request)
    {
        $firstBoiler = Boiler::getInstance();
        $firstBoiler->fill();
        $firstBoiler->boil();
        $firstBoiler->drain();

        $secondBoiler = Boiler::getInstance();

        dd($firstBoiler, $secondBoiler, $firstBoiler === $secondBoiler);
    }
}
