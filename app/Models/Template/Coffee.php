<?php

declare(strict_types=1);

namespace App\Models\Template;

use App\Abstracts\Template\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    public function brew(): string
    {
        return 'Dripping Coffee through filter';
    }

    public function addCondiments(): string
    {
        return 'Adding Sugar and Milk';
    }
}
