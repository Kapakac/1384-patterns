<?php

declare(strict_types=1);

namespace App\Http\Controllers\Template;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Template\Coffee;
use App\Models\Template\Tea;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Шаблонный метод"
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $validator = Validator::make($params, [
            'topping' => 'boolean'
        ]);

        if ($validator->fails()) {
            abort(404);
        }

        $tea = new Tea();
        $coffee = new Coffee();

        return ['tea' => $tea->prepareRecipe(), 'coffee' => $coffee->prepareRecipe()];
    }
}
