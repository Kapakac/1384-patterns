<?php

namespace App\Contracts;

/**
 * Архитектурный паттерн "Стратегия"
 */
interface WeaponBehavior
{
    public function useWeapon(): string;
}
