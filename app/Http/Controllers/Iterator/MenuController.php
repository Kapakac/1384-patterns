<?php

declare(strict_types=1);

namespace App\Http\Controllers\Iterator;

use App\Models\Iterator\QueryMenuItem;
use App\Models\Iterator\ArrayMenuItem;
use App\Http\Controllers\Controller;
use App\Models\Iterator\Waitress;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Итератор"
     */
    public function index(Request $request)
    {
        $arrayMenuItems = new ArrayMenuItem();
        $queryMenuItems = new QueryMenuItem();

        $waitress = new Waitress(arrayMenuItems: $arrayMenuItems, queryMenuItems: $queryMenuItems);

        return $waitress->printFullMenu();
    }
}
