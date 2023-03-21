<?php

declare(strict_types=1);

namespace App\Http\Controllers\Facade;

use App\Http\Controllers\Controller;
use App\Models\Facade\HomeTheater;
use Illuminate\Http\Request;

class HomeTheaterController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Фасад"
     */
    public function index(Request $request)
    {
        $homeTheater = new HomeTheater();

        return [
            'movie has been start' => $homeTheater->watchMovie('Terminator'),
            'movie has been end' => $homeTheater->endMovie()
        ];
    }

}
