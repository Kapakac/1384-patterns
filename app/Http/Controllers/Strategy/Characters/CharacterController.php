<?php

namespace App\Http\Controllers\Strategy\Characters;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(): string
    {
        return '';
    }

    /**
     * Просто хардкодный пример ТОЛЬКО для демо-отображения паттерна "Стратегия"
     */
    public function show(Request $request)
    {
        $params = $request->route()->parameters();
        $validator = Validator::make($params, [
            'character' => [
                'required',
                Rule::in(['king', 'queen']),
            ],
            'weapon' => [
                'required',
                Rule::in(['axe', 'sword']),
            ]
        ]);

        if ($validator->fails()) {
            abort(404);
        }

        $character = 'App\\Models\\Strategy\\Characters\\' . ucfirst($params['character']);
        $character = new $character();
        $weapon = 'App\\Models\\Strategy\\WeaponBehaviors\\' . ucfirst($params['weapon']) . 'Behavior';
        $weapon = new $weapon();

        $character->setWeaponBehavior($weapon->useWeapon());

        return $character->fight() . ' и ' . mb_strtolower($character->weaponBehavior);
    }
}
