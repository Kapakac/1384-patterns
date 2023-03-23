<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Models\Factory\AbstractFactory\ChicagoPizzaStore as AbstractFactoryChicagoPizzaStore;
use App\Models\Factory\FactoryMethod\ChicagoPizzaStore as FactoryMethodChicagoPizzaStore;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Фабрика"
     */
    public function index(Request $request)
    {
        echo 'FactoryMethod:</br>';
        $methodChicagoStore = new FactoryMethodChicagoPizzaStore();
        $methodPepperoni = $methodChicagoStore->orderPizza('pepperoni');
        echo '<pre>';
        var_dump($methodPepperoni);
        echo '</pre>';

        echo '-------------------------</br>';

        echo 'AbstractFactory:</br>';
        $abstractChicagoStore = new AbstractFactoryChicagoPizzaStore();
        $abstractVeggie = $abstractChicagoStore->orderPizza('veggie');
        echo '<pre>';
        var_dump($abstractVeggie);
        echo '</pre>';
    }

}
