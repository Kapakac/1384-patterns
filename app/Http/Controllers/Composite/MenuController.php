<?php

declare(strict_types=1);

namespace App\Http\Controllers\Composite;

use App\Http\Controllers\Controller;
use App\Models\Composite\MenuItem;
use App\Models\Composite\Waitress;
use App\Models\Composite\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Компоновщик"
     */
    public function index(Request $request)
    {
        $allMenus = new Menu('All menus', 'All menus combined');

        $dinerMenu = new Menu('Diner menu', 'Lunch');
        $cafeMenu = new Menu('Cafe menu', 'Dinner');
        $dessertMenu = new Menu('Dessert menu', 'Dessert');

        $dinerMenu->add(new MenuItem(
                name: 'Pasta',
                description: 'Spaghetti with Marinara Sauce, and a slice of sourdough bread',
                price: 375)
        );
        $dinerMenu->add($dessertMenu);

        $allMenus->add($dinerMenu);
        $allMenus->add($cafeMenu);

        $waitress = new Waitress($allMenus);

        return [$waitress->printMenu()];
    }
}
