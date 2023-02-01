<?php

namespace App\Contracts\Strategy;

/**
 * Архитектурный паттерн "Стратегия"
 */
interface WeaponBehavior
{
    public function useWeapon(): string;
}
