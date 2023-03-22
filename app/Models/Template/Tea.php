<?php

declare(strict_types=1);

namespace App\Models\Template;

use App\Abstracts\Template\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    public function brew(): string
    {
        return 'Steeping the tea';
    }

    public function addCondiments(): string
    {
        return 'Adding Lemon';
    }
}
