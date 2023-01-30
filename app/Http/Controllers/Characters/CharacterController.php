<?php

namespace App\Http\Controllers\Characters;

use App\Models\WeaponBehaviors\SwordBehavior;
use App\Http\Controllers\Controller;
use App\Models\Characters\Queen;

class CharacterController extends Controller
{
    public function index()
    {
        $queen = new Queen();
        $swordWeapon = new SwordBehavior();
        $queen->setWeaponBehavior($swordWeapon->useWeapon());

        return $queen->fight() . ' и ' . mb_strtolower($queen->weaponBehavior);
    }

}
